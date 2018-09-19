<?php

namespace App\Repositories\Contracts;

use App\Eloquent\BookCategory;

interface BookCategoryRepository extends AbstractRepository
{
    public function getData($data = [], $with = [], $dataSelect = ['*']);
    
    public function store($data = []);

    public function find($id);
}
