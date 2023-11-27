<?php

namespace App\Services\Audit\Getters;

use App\Services\Audit\Auditable;
use Illuminate\Database\Eloquent\Model;
use Ramsey\Collection\Collection;

abstract class Getter
{

    /**
     * @var Model|Auditable
     */
    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Override this method to set the old and new values
     * Example:
     * ```php
     *  return [
     *  'old' => [],
     *  'new' => [],
     * ]
     * ```
     *
     * @return void
     */
    abstract public function getValues();

    /**
     * @return bool
     */
    public function isEmpty(): bool
    {
        return empty($this->old) && empty($this->new);
    }

    /**
     * @return array
     */
    public function getAttributeNewValues(): array
    {

        $result = [];
        $model = $this->model;

        foreach ($model->getAttributes() as $attribute => $value) {
            if ($model->isAttributeAuditable($attribute)) {
                $result[$attribute] = $value;
            }
        }
        return $result;
    }

}
