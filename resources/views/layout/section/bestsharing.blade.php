@if(isset($bestSharing) && !empty($bestSharing))
    @for ($i = 1; $i < count($bestSharing) - 1; $i++)
        <div class="bestseller-total">
            <div class="single-bestseller mb-25">
                <div class="bestseller-img">
                    <a href="#"><img src="{{ asset(config('view.image_paths.product') . $bestSharing[$i]->medias[0]->path) }}" alt="book" /></a>
                    <div class="product-flag">
                        <ul>
                            <li><span class="sale">{{ trans('settings.book.new') }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="bestseller-text text-center">
                    <h3> <a href="{{ '/books/' . $bestSharing[$i]->slug . '-' . $bestSharing[$i]->id }}">{{ $bestSharing[$i]->title }}</a></h3>
                </div>
            </div>
            <div class="single-bestseller">
                <div class="bestseller-img">
                    <a href="#"><img src="{{ asset(config('view.image_paths.product') . $bestSharing[++$i]->medias[0]->path) }}" alt="book" /></a>
                    <div class="product-flag">
                        <ul>
                            <li><span class="sale">{{ trans('settings.book.new') }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="bestseller-text text-center">
                    <h3> <a href="{{ '/books/' . $bestSharing[$i]->slug . '-' . $bestSharing[$i]->id }}">{{ $bestSharing[$i]->title }}</a></h3>
                </div>
            </div>
        </div>
    @endfor
@endif
