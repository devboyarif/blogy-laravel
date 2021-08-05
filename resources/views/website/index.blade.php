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
                    <h4 class="heading">Top Posts</h4>
                </div>
            </div>
            <div class="row">
                @forelse ($top_posts as $post)
                    <div class="col-lg-4 mb-3">
                        <div class="post-feature">
                            <span class="fs-6 has-line">{{ $post->category->name ?? '' }}</span>
                            <h6><a href="{{ route('details', $post->slug) }}">{{ $post->title }}</a></h6>
                            <div class="blog-item-info-release">
                                <span>March 25, 2021</span><span class="dot"></span><span>4 min read</span>
                            </div>
                            <a href="{{ route('details', $post->slug) }}" class="btn btn-link">Read Article
                                <svg width="18" height="12" viewBox="0 0 18 12" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                @empty
                    No post found
                @endforelse
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
                @forelse ($latest_posts as $post)
                    <x-single-post :post="$post" column="col-lg-4 col-md-6 fgdfg" :bigPost="false" />
                @empty
                    No post found
                @endforelse
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
                @forelse ($featured_posts as $post)
                    <x-single-post :post="$post" />
                @empty
                    No post found
                @endforelse
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
                    @livewire('post.all-post', ['bigPost' => false])
                </div>
                <div class="col-lg-4 mt-4 mt-lg-0">
                    <div class="featured-category">
                        <h6>Featured Category</h6>
                        @foreach ($featured_categories as $category)
                            <div class="featured-category-item"
                                style="background-image: url({{ asset($category->thumbnail ? $category->thumbnail : 'frontend/dist/images/category-02.jpg') }});">
                                <a href="#">{{ $category->name }}</a>
                            </div>
                        @endforeach
                    </div>
                    <div class="all-tags">
                        <h6>All Tags</h6>
                        <ul class="list-unstyled list-inline all-tags-list">
                            @foreach ($tags as $tag)
                                <li class="list-inline-item m-1"><a href="#">{{ $tag->name }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- All Post Ends Here -->
@endsection
