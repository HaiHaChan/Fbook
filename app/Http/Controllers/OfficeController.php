<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\OfficeRepository;

class OfficeController extends Controller
{
    protected $repository;
    
    public function __construct(OfficeRepository $repository)
    {
        $this->repository = $repository;
    }

    public function getData()
    {
        return $this->repository->getData();
    }
}
