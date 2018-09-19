@if($item['books'])
    <div class="product-total-2">
        @foreach($item['books'] as $book)
            <div class="single-most-product bd mb-18">
                <div class="most-product-img">
                    <a href="#"><img src="{{ asset(config('view.image_paths.product') . $book->medias[0]->path) }}" alt="book" /></a>
                </div>
                <div class="most-product-content">
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
        @endforeach
    </div>
@endif
