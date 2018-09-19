<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Repositories\Contracts\CategoryRepository;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Exception;

class CategoryController extends Controller
{

    protected $category;

    public function __construct(CategoryRepository $category)
    {
        $this->category = $category;
    }

    public function index()
    {
        $categories = $this->category->getData();

        return view('admin.category.list', compact('categories'));
    }

    public function create()
    {
        return view('admin.category.add');
    }

    public function store(CategoryRequest $request)
    {
        try {
            $slug = str_slug($request->name);
            $request->merge(['slug' => $slug]);
            $this->category->store($request->all());

            return back()->with('success', __('admin.success'));
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function edit($id)
    {
        try {
            $category = $this->category->find($id);

            return view('admin.category.edit', compact('category'));
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function update(CategoryRequest $request, $id)
    {
        try {
            $category = $this->category->find($id);
            $slug = str_slug($request->name);
            $request->merge(['slug' => $slug]);
            $category->update($request->all());

            return back()->with('success', __('admin.success'));
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function destroy($id)
    {
        try {
            $this->category->delete($id);

            return back()->with('success', __('admin.success'));
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }
}
