<div class="product-wrapper">
    <div class="product-img">
        <a href="#">
            <img src="{{ asset(config('view.image_paths.product')  . $book->medias[0]->path) }}" alt="book" class="primary" />
        </a>
        <div class="quick-view">
            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                <i class="fa fa-search-plus"></i>
            </a>
        </div>
        <div class="product-flag">
            <ul>
                <li><span class="sale">new</span></li>
            </ul>
        </div>
    </div>
    <div class="product-details text-center">
        <div class="product-rating">
            <ul>
                @if($book->avg_star > 1)
                    @for($i = 1; $i <= $book->avg_star; $i++)
                        <li><a href="#"><i class="fa fa-star"></i></a></li>
                    @endfor
                @endif
            </ul>
        </div>
        <h4><a href="{{ '/books/' . $book->slug . '-' . $book->id }}">{{ $book->title }}</a></h4>
    </div> 
</div>
