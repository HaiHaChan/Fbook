<?php

namespace App\Repositories\Eloquents;

use App\Eloquent\Role;
use App\Repositories\Contracts\RoleRepository;

class RoleEloquentRepository extends AbstractEloquentRepository implements RoleRepository
{
    public function model()
    {
        return new Role;
    }

    public function getData($with = [], $data = [], $dataSelect = ['*'])
    {
        return $this->model()
            ->select($dataSelect)
            ->with($with)
            ->paginate(8);
    }
}
