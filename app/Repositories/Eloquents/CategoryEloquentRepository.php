<?php

namespace App\Repositories\Eloquents;

use App\Eloquent\Category;
use App\Repositories\Contracts\CategoryRepository;

class CategoryEloquentRepository extends AbstractEloquentRepository implements CategoryRepository
{
    public function model()
    {
        return new Category;
    }

    public function getData($data = [], $with = [], $dataSelect = ['*'])
    {
        return $this->model()
            ->select($dataSelect)
            ->with($with)
            ->get();
    }

    public function store($data = [])
    {
        return $this->model()->create($data);
    }

    public function find($id)
    {
        return $this->model()->findOrFail($id);
    }

    public function update($id, $data = [])
    {
        $model = $this->model()->findOrFail($id);

        return $model->update($data);
    }

    public function delete($id)
    {
        $model = $this->model()->findOrFail($id);

        return $model->delete();
    }
}
