@extends('layout.app')

@section('header')
    @parent
    <div class="banner-area banner-res-large ptb-35">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="single-banner">
                        <div class="banner-img">
                            <a href="#"><img src="{{ asset(config('view.image_paths.banner') . '1.png') }}" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Free shipping item</h4>
                            <p>For all orders over $500</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="single-banner">
                        <div class="banner-img">
                            <a href="#"><img src="{{ asset(config('view.image_paths.banner') . '2.png') }}" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Money back guarantee</h4>
                            <p>100% money back guarante</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 hidden-sm col-xs-12">
                    <div class="single-banner">
                        <div class="banner-img">
                            <a href="#"><img src="{{ asset(config('view.image_paths.banner') . '3.png') }}" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Cash on delivery</h4>
                            <p>Lorem ipsum dolor consecte</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <div class="single-banner mrg-none-xs">
                        <div class="banner-img">
                            <a href="#"><img src="{{ asset(config('view.image_paths.banner') . '4.png') }}" alt="banner" /></a>
                        </div>
                        <div class="banner-text">
                            <h4>Help & Support</h4>
                            <p>Call us : + 0123.4567.89</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layout.slider')
@endsection

@section('content')
<div class="product-area pt-95 xs-mb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-50">
                    <h2>{{ trans('settings.home.top_interesting') }}</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="tab-menu mb-40 text-center">
                    <ul>
                        <li class="active"><a href="#Audiobooks" data-toggle="tab">{{ trans('settings.home.top_rating') }}</a></li>
                        <li><a href="#books" data-toggle="tab">{{ trans('settings.home.top_review') }}</a></li>
                        <li><a href="#bussiness" data-toggle="tab">{{ trans('settings.home.top_view') }}</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="tab-content">
            <div class="tab-pane active" id="Audiobooks">
                <div class="tab-active owl-carousel">
                    @if (isset($topInteresting) && !empty($topInteresting))
                        @foreach($topInteresting as $book)
                            @include('layout.section.top_book')
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="tab-pane fade" id="books">
                <div class="tab-active owl-carousel">
                    @if (isset($topReview) && !empty($topReview))
                        @foreach($topReview as $book)
                            @include('layout.section.top_book')
                        @endforeach
                    @endif
                </div>
            </div>
            <div class="tab-pane fade" id="bussiness">
                <div class="tab-active owl-carousel">
                    @if (isset($topViewed) && !empty($topViewed))
                        @foreach($topViewed as $book)
                            @include('layout.section.top_book')
                        @endforeach
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
<div class="banner-area-5 mtb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-img-2">
                    <a href="#"><img src="{{ asset(config('view.image_paths.banner') . '5.jpg') }}" alt="banner" /></a>
                    <div class="banner-text">
                        <h3>G. Meyer Books & Spiritual Traveler Press</h3>
                        <h2>Sale up to 30% off</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="bestseller-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="bestseller-content">
                    <h1>{{ trans('settings.home.best_sharing') }}</h1>
                    <h2>{{ $hotUser->name }}</h2>
                    <div class="social-author">
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="banner-img-2">
                    @if($bestSharing)
                        <a href="#"><img src="{{ asset(config('view.image_paths.product') . $bestSharing[0]->medias[0]->path) }}" alt="banner" /></a>
                    @else
                        <a href="#"><img src="{{ asset(config('view.image_paths.product') . '6.jpg') }}" alt="banner" /></a>
                    @endif
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="bestseller-active owl-carousel">
                    @include('layout.section.bestsharing')
                </div>
            </div>
        </div>
    </div>
</div>
<div class="new-book-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title bt text-center pt-100 mb-30 section-title-res">
                    <h2>{{ trans('settings.home.latest_books') }}</h2>
                </div>
            </div>
        </div>
        <div class="tab-active owl-carousel">
            @include('layout.section.latest_book')
        </div>
    </div>
</div>
<div class="banner-static-area bg ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="banner-shadow-hover xs-mb">
                    <a href="#"><img src="{{ asset(config('view.image_paths.banner') . '8.jpg') }}" alt="banner" /></a>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="banner-shadow-hover">
                    <a href="#"><img src="{{ asset(config('view.image_paths.banner') . '9.jpg') }}" alt="banner" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="most-product-area pt-90 pb-100">
    <div class="container">
        <div class="row">
            @if($officeBooks)
                @foreach($officeBooks as $item)
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 xs-mb">
                        <div class="section-title-2 mb-30">
                            <h3>{{ $item['office'] }}</h3>
                        </div>
                        <div class="product-active-2 owl-carousel">
                            @include('layout.section.offcie_book')
                        </div>
                    </div>
                @endforeach
            @endif
            <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
                <div class="block-newsletter">
                    <h2>Sign up for send newsletter</h2>
                    <p>You can be always up to date with our company new!</p>
                    <form action="#">
                        <input type="text" placeholder="Enter your email address" />
                    </form>
                    <a href="#">Send Email</a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="testimonial-area ptb-100 bg">
    <div class="container">
        <div class="row">
            <div class="testimonial-active owl-carousel">
                <div class="col-lg-12">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <a href="#"><i class="fa fa-quote-right"></i></a>
                        </div>
                        <div class="testimonial-text">
                            <p>I'm so happy with all of the themes, great support, could not wish for more. These people are <br /> geniuses ! Kudo's from the Netherlands !</p>
                            <a href="#">Sandy Wilcke/user</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <a href="#"><i class="fa fa-quote-right"></i></a>
                        </div>
                        <div class="testimonial-text">
                            <p>All Perfect !! I have three sites with magento , this theme is the best !! Excellent support ,<br /> advice theme installation package , sorry for English, are Italian but I had no problem !! Thank you !</p>
                            <a href="#">Sandy Wilcke/user</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="recent-post-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-30 section-title-res">
                    <h2>Latest from our blog</h2>
                </div>
            </div>
            <div class="post-active owl-carousel text-center">
                @include('layout.section.blog')
            </div>
        </div>
    </div>
</div>
<div class="social-group-area ptb-60">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="section-title-3">
                    <h3>Latest Tweets</h3>
                </div>
                <div class="twitter-content">
                    <div class="twitter-icon">
                        <a href="#"><i class="fa fa-twitter"></i></a>
                    </div>
                    <div class="twitter-text">
                        <p>
                            Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum notare quam 
                        </p>
                        <a href="#">posthemes</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="section-title-3">
                    <h3>Stay Connected</h3>
                </div>
                <div class="link-follow">
                    <ul>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fa fa-flickr"></i></a></li>
                        <li class="hidden-sm"><a href="#"><i class="fa fa-vimeo"></i></a></li>
                        <li class="hidden-sm"><a href="#"><i class="fa fa-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('footer')
    @parent
@endsection
