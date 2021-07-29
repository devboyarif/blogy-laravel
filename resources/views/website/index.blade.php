@extends('layouts.website')

@section('data')
    <!-- Banner Starts Here -->
    <section class="banner"
        style="background-color: #F5F5F5; background-image: url({{ asset('frontend') }}/dist/images/banner.jpg); background-position: right; background-repeat: no-repeat;">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="banner-slider">
                        {{--  --}}
                        <div class="banner-content">
                            <div class="banner-content-main">
                                <span class="fs-6 has-line">Interior</span>
                                <h4><a href="details.html">How to Get Started With Interior Design</a></h4>
                                <div class="blog-date">
                                    <div class="blog-date-start">
                                        <span>March 25, 2021</span>
                                    </div>
                                    <div class="blog-date-end">
                                        <span>4 min read</span>
                                    </div>
                                </div>
                                <p>
                                    Nulla et commodo turpis. Etiam hendrerit ornare pharetra. Cras eleifend purus vitae
                                    lorem venenatis bibendum. Sed commodo mi quis augue finibus, ut feugiat erat
                                    aliquam.
                                </p>
                                <a href="details.html" class="btn btn-default">Read More</a>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner Ends Here -->

    <!-- Post Feture Starts Here -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">Top Post</h4>
                </div>
            </div>
            <div class="row">
                {{--  --}}
                <div class="col-lg-4">
                    <div class="post-feature">
                        <span class="fs-6 has-line">Travels</span>
                        <h6><a href="details.html">Top 10 beautiful Place in Bangladesh</a></h6>
                        <div class="blog-item-info-release">
                            <span>March 25, 2021</span> <span class="dot"></span> <span>4 min read</span>
                        </div>
                        <a href="details.html" class="btn btn-link">Read Article
                            <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </a>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </section>
    <!-- Post Feture Ends Here -->

    <!-- Latest Post Starts Here -->
    <section class="section-padding latest-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">Latest Posts</h4>
                </div>
            </div>
            <div class="row">
                {{--  --}}
                @forelse ($latests_posts as $post)
                    <div class="col-lg-4 col-md-6 mb-5">
                        <div class="blog-item blog-item-sm">
                            <div class="blog-item-image">
                                <a href="details.html">
                                    @if ($post->thumbnail)
                                        <img src="{{ asset($post->thumbnail) }}" alt="Image">
                                    @else
                                        <img src="{{ asset('frontend') }}/dist/images/sm-01.jpg" alt="Image">
                                    @endif
                                </a>
                            </div>
                            <div class="blog-item-info">
                                <span class="fs-6 has-line">Travels</span>
                                <h5><a href="details.html">{{ $post->title }}</a></h5>
                                <div class="blog-item-info-release">
                                    <span>March 25, 2021</span> <span class="dot"></span> <span>4 min read</span>
                                </div>
                                <a href="details.html" class="btn btn-link">Read Article
                                    <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor"
                                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    No post found
                @endforelse
                {{--  --}}
            </div>
        </div>
    </section>
    <!-- Latest Post Ends Here -->

    <!-- Featured Post Starts Here -->
    <section class="section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">Featured Posts</h4>
                </div>
            </div>
            <div class="row">
                {{--  --}}
                <div class="col-lg-6 col-md-6">
                    <div class="blog-item">
                        <div class="blog-item-image">
                            <a href="details.html">
                                <img src="{{ asset('frontend') }}/dist/images/01.jpg" alt="Image">
                            </a>
                        </div>
                        <div class="blog-item-info">
                            <span class="fs-6 has-line">Travels</span>
                            <h5><a href="details.html">How to Get Started With UI/UX in Figma</a></h5>
                            <div class="blog-item-info-release">
                                <span>March 25, 2021</span> <span class="dot"></span> <span>4 min read</span>
                            </div>
                            <a href="details.html" class="btn btn-link">Read Article
                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                {{--  --}}
            </div>
        </div>
    </section>
    <!-- Featured Post Ends Here -->

    <!-- All Post Starts Here -->
    <section class="section-padding all-post-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h4 class="heading">All Post</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        {{--  --}}
                        <div class="col-lg-6 col-md-6">
                            <div class="blog-item blog-item-sm">
                                <div class="blog-item-image">
                                    <a href="details.html">
                                        <img src="{{ asset('frontend') }}/dist/images/sm-01.jpg" alt="Image">
                                    </a>
                                </div>
                                <div class="blog-item-info">
                                    <span class="fs-6 has-line">Travels</span>
                                    <h5><a href="details.html">Top 10 beautiful Place in Bangladesh</a></h5>
                                    <div class="blog-item-info-release">
                                        <span>March 25, 2021</span> <span class="dot"></span> <span>4 min read</span>
                                    </div>
                                    <a href="details.html" class="btn btn-link">Read Article
                                        <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                                            </path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                        </div>
                        {{--  --}}
                    </div>
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="featured-category">
                        <h6>Featured Category</h6>
                        <div class="featured-category-item"
                            style="background-image: url({{ asset('frontend') }}/dist/images/category-01.jpg);">
                            <a href="#">Travel</a>
                        </div>
                        <div class="featured-category-item"
                            style="background-image: url({{ asset('frontend') }}/dist/images/category-02.jpg);">
                            <a href="#">Food</a>
                        </div>
                        <div class="featured-category-item mb-0"
                            style="background-image: url({{ asset('frontend') }}/dist/images/category-03.jpg);">
                            <a href="#">Lifestyle</a>
                        </div>
                    </div>
                    <div class="all-tags">
                        <h6>All Tags</h6>
                        <ul class="list-unstyled list-inline all-tags-list">
                            <li class="list-inline-item"><a href="#">Journey</a></li>
                            <li class="list-inline-item"><a href="#">Life</a></li>
                            <li class="list-inline-item"><a href="#">Food</a></li>
                            <li class="list-inline-item"><a href="#">Fashion</a></li>
                            <li class="list-inline-item"><a href="#">UI</a></li>
                        </ul>
                        <ul class="list-unstyled list-inline all-tags-list mb-0">
                            <li class="list-inline-item"><a href="#">Interior</a></li>
                            <li class="list-inline-item"><a href="#">Minimalistic</a></li>
                            <li class="list-inline-item"><a href="#">Design</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Post Ends Here -->
@endsection
