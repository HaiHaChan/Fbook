<?php

namespace App\Repositories\Eloquents;

use App\Eloquent\Office;
use App\Eloquent\User;
use App\Repositories\Contracts\OfficeRepository;

class OfficeEloquentRepository extends AbstractEloquentRepository implements OfficeRepository
{
    public function model()
    {
        return new Office;
    }

    public function getData($data = [], $with = [], $dataSelect = ['*'])
    {
        return $this->model()
            ->select($dataSelect)
            ->with($with)
            ->get();
    }
}
