<?php

namespace App\Http\Controllers;

<<<<<<< 9a91a2273265c5b716e631dd345fd9209be2b22f
use App\Http\Requests\BookRequest;
use App\Repositories\Contracts\BookRepository;
use App\Repositories\Contracts\CategoryRepository;
use App\Repositories\Contracts\MediaRepository;
use App\Repositories\Contracts\BookCategoryRepository;
use Yajra\Datatables\DataTables;
use App\Eloquent\Book;
use Symfony\Component\Routing\Annotation\Route;
use Exception;

class BookController extends Controller
{
    protected $book;
    protected $media;
    protected $bCategory;

    public function __construct(
        BookRepository $book,
        MediaRepository $media,
        BookCategoryRepository $bCategory,
        CategoryRepository $category
    ) {
        $this->book = $book;
        $this->media = $media;
        $this->bCategory = $bCategory;
        $this->category = $category;
    }

    public function index()
    {
        return view('admin.book.list');
    }

    public function ajaxShow()
    {
        try {
            $books = $this->book->getJson(
                [],
                [],
                ['id', 'title', 'author', 'publish_date', 'total_pages', 'avg_star', 'count_viewed']
            );
            return Datatables::of($books)
                ->make(true);
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function create()
    {
        try {
            $categories = $this->category->getData();

            return view('admin.book.add', compact('categories'));
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function store(BookRequest $request)
    {
        try {
            //save book
            $slug = str_slug($request->title);
            $request->merge(['slug' => $slug]);
            $book = $this->book->store($request->all());
            $request->merge(['book_id' => $book->id]);
            //save category
            if ($request->has('category')) {
                $this->bCategory->store($request->all());
            }
            //create image
            $this->media->store($request->all());

            return redirect("admin/book/$book->id/edit")->with('success', __('admin.success'));
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function edit($id)
    {
       try {
            $book = $this->book->find($id);
            $categories = $this->category->getData();

            return view('admin.book.edit', compact('book', 'categories'));
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function update(BookRequest $request, $id)
    {
        try {
            //update book
            $book = $this->book->find($id);
            $slug = str_slug($request->title);
            $request->merge(['slug' => $slug]);
            $book->update($request->all());
            $request->merge(['book_id' => $book->id]);
            $data['book_id'] = $book->id;
            //save category
            if ($request->has('category')) {
                $book->categories()->detach();
                $data['category'] = $request->category;
                $this->bCategory->store($request->all());
            } else {
                $book->categories()->detach();
            }
            //delete image if user upload image
            $this->media->destroy($request->all());
            // create new image
            $this->media->store($request->all());

            return back()->with('success', __('admin.success'));
        } catch (Exception $e) {
            return view('admin.error.error');
        }
    }

    public function destroy($id)
    {
        try {
            $book = $this->book->find($id);
            //remote category
            $book->categories()->detach();
            //remove image
            if (isset($book->medias[0])) {
                $this->media->destroy($book);
                $this->book->destroy($id);

                return back()->with('success', __('admin.success'));
            } else {
                $book->delete();

                return back()->with('success', __('admin.success'));
            }
        } catch (Exception $e) {
            return view('admin.error.error');
        }
=======
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
>>>>>>> tam thời
    }
}
