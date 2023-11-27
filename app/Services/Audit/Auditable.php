<?php

namespace App\Services\Audit;

use App;
use App\Services\Audit\Getters\Getter;

trait Auditable
{

    /**
     * @return void
     */
    public static function bootAuditable()
    {
        static::created(function ($model) {

            /** @var self $model */
            $model->audit('created');
        });

        static::saving(function ($model) {

            /** @var self $model */
            if ($model->exists) {
                $model->audit('updated');
            }
        });

        static::deleting(function ($model) {

            /** @var self $model */
            $model->audit('deleted');
        });
    }

    /**
     * @param string $event
     * @return void
     */
    public function audit(string $event)
    {
        if ($this->isEventAuditable($event)) {
            $this->auditEvent($event);
        }
    }

    /**
     * @param string $event
     * @return bool
     */
    public function isEventAuditable(string $event): bool
    {
        $events = config('my.audit.events', []);
        return in_array($event, $events);
    }

    /**
     * @param string $attribute
     * @return bool
     */
    public function isAttributeAuditable(string $attribute): bool
    {
        return !in_array($attribute, ['created_at', 'updated_at']);
    }

    /**
     * @param string $event
     * @return void
     */
    public function auditEvent(string $event)
    {

        $values = $this->getAuditableValues($event);
        $newValues = $values['new'] ?? [];
        $oldValues = $values['old'] ?? [];

        if (!$this->shouldAuditValues($newValues, $oldValues)) {
            return;
        }

        $audit = new App\Models\ProductAudit();
        $audit->product_id = $this->id;
        $audit->product_name = $this->title;
        $audit->event = $event;
        $audit->old_values = $oldValues;
        $audit->new_values = $newValues;
        $audit->user_id = \Auth::user()->id;
        $audit->save();
    }

    /**
     * @param array $newValues
     * @param array $oldValues
     * @return bool
     */
    public function shouldAuditValues(array $newValues, array $oldValues): bool
    {
        // if both new and old values are empty, we should not audit these values
        return !empty($newValues) || !empty($oldValues);
    }

    /**
     * @param string $event
     * @return array[]
     *
     * @see Getter
     */
    public function getAuditableValues(string $event): array
    {

        $getters = config('my.audit.getters', []);
        if (isset($getters[$event])) {
            /** @var Getter $getter */
            $getter = $getters[$event];
            return (new $getter($this))->getValues();
        }

        return [
            'old' => [],
            'new' => [],
        ];
    }

    public function saveAuditHistory(array $data)
    {
    }
}
