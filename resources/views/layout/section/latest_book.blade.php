@if(isset($latestBook) && !empty($latestBook))
    @for($i = 0; $i < count($latestBook); $i++)
        <div class="tab-total">
            <div class="product-wrapper mb-40">
                <div class="product-img">
                    <a href="#">
                        <img src="{{ asset(config('view.image_paths.product') . $latestBook[$i]->medias[0]->path) }}" alt="book" class="primary" />
                    </a>
                    <div class="quick-view">
                        <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                        </a>
                    </div>
                </div>
                <div class="product-details text-center">
                    <div class="product-rating">
                        <ul>
                            @if($latestBook[$i]->avg_star > 1)
                                @for($j = 1; $j <= $latestBook[$i]->avg_star; $j++)
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                @endfor
                            @endif
                        </ul>
                    </div>
                    <h4><a href="{{ '/books/' . $latestBook[$i]->slug . '-' . $latestBook[$i]->id }}">{{ $latestBook[$i]->title }}</a></h4>
                </div> 
            </div>
            <div class="product-wrapper">
                <div class="product-img">
                    <a href="#">
                        <img src="{{ asset(config('view.image_paths.product') . $latestBook[++$i]->medias[0]->path) }}" alt="book" class="primary" />
                    </a>
                    <div class="quick-view">
                        <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                            <i class="fa fa-search-plus"></i>
                        </a>
                    </div>
                    <div class="product-flag">
                        <ul>
                            <li><span class="sale">{{ trans('settings.book.new') }}</span> <br></li>
                        </ul>
                    </div>
                </div>
                <div class="product-details text-center">
                    <div class="product-rating">
                        <ul>
                            @if($latestBook[$i]->avg_star > 1)
                                @for($j = 1; $j <= $latestBook[$i]->avg_star; $j++)
                                    <li><a href="#"><i class="fa fa-star"></i></a></li>
                                @endfor
                            @endif
                        </ul>
                    </div>
                    <h4><a href="{{ '/books/' . $latestBook[$i]->slug . '-' . $latestBook[$i]->id }}">{{ $latestBook[$i]->title }}</a></h4>
                </div> 
            </div>
        </div>
    @endfor
@endif