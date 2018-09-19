<?php

namespace App\Repositories\Contracts;

use App\Eloquent\Role;

interface RoleRepository extends AbstractRepository
{
    public function getData($with = [], $data = [], $dataSelect = ['*']);
}
