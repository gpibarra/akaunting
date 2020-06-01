<?php

namespace App\Imports\Common;

use App\Imports\Common\Items as Import;
use App\Models\Common\Item as Model;

class ItemsUpdate extends Import
{
    public function model(array $row)
    {
        if (isset($row['id'])) {
            if ($model = Model::find($row['id'])) {
                $model->fill($row);
                return $model;
            }
        }
        return null;
    }

    public function rules(): array
    {
        return parent::rules();
    }


    public function batchSize(): int
    {
        return 1;
    }
}
