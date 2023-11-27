<?php

namespace App\Services\Audit\Getters;

class UpdatedEventGetter extends Getter
{

    public function getValues(): array
    {

        $old = [];
        $new = [];
        $model = $this->model;

        foreach ($model->getDirty() as $attribute => $value) {
            if ($model->isAttributeAuditable($attribute)) {
                $old[$attribute] = $model->getOriginal($attribute);
                $new[$attribute] = $model->getAttribute($attribute);
            }
        }

        return [
            'old' => $old,
            'new' => $new,
        ];

    }
}
