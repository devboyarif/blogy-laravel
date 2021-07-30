@extends('layouts.website')

@section('data')
    <!-- Blog Details Banner Starts Here -->
    <section class="details-banner">
        @if ($post->thumbnail)
            <img src="{{ asset($post->thumbnail) }}" alt="Background Image" class="img-fluid w-100">
        @else
            <img src="{{ asset('frontend') }}/dist/images/detailsbanner.jpg" alt="Background Image"
                class="img-fluid w-100">
        @endif
    </section>
    <!-- Blog Details Banner Ends Here -->

    <!-- Blog Details Intro Starts Here -->
    <section class="blog-intro">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="blog-intro-area">
                        <span class="has-line fs-6"><a href="#">{{ $post->category->name ?? '' }}</a></span>
                        <h3>{{ $post->title }}</h3>
                        <div class="blog-intro-area-bottom">
                            <div class="intro-start">
                                <div class="intro-start-author">
                                    <div class="author-image">
                                        <img src="{{ asset('backend') }}/image/default.png" alt="Author">
                                    </div>
                                    <a href="#" class="fs-6">{{ $post->user->name }}</a>
                                </div>
                                <div class="intro-start-release d-flex">
                                    <div>
                                        <span class="dot"></span>
                                        <span class="intro-start-time">March 25, 2021</span>
                                    </div>
                                    <div>
                                        <span class="dot"></span>
                                        <span class="intro-start-time">4 min read</span>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-end">
                                <ul class="list-unstyled list-inline social-links mb-0">
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M10.6645 2.65667H12.1252V0.112667C11.8732 0.078 11.0065 0 9.99718 0C7.89118 0 6.44851 1.32467 6.44851 3.75933V6H4.12451V8.844H6.44851V16H9.29785V8.84467H11.5278L11.8818 6.00067H9.29718V4.04133C9.29785 3.21933 9.51918 2.65667 10.6645 2.65667Z"
                                                        fill="currentColor" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M16 3.039C15.405 3.3 14.771 3.473 14.11 3.557C14.79 3.151 15.309 2.513 15.553 1.744C14.919 2.122 14.219 2.389 13.473 2.538C12.871 1.897 12.013 1.5 11.077 1.5C9.261 1.5 7.799 2.974 7.799 4.781C7.799 5.041 7.821 5.291 7.875 5.529C5.148 5.396 2.735 4.089 1.114 2.098C0.831 2.589 0.665 3.151 0.665 3.756C0.665 4.892 1.25 5.899 2.122 6.482C1.595 6.472 1.078 6.319 0.64 6.078C0.64 6.088 0.64 6.101 0.64 6.114C0.64 7.708 1.777 9.032 3.268 9.337C3.001 9.41 2.71 9.445 2.408 9.445C2.198 9.445 1.986 9.433 1.787 9.389C2.212 10.688 3.418 11.643 4.852 11.674C3.736 12.547 2.319 13.073 0.785 13.073C0.516 13.073 0.258 13.061 0 13.028C1.453 13.965 3.175 14.5 5.032 14.5C11.068 14.5 14.368 9.5 14.368 5.166C14.368 5.021 14.363 4.881 14.356 4.742C15.007 4.28 15.554 3.703 16 3.039Z"
                                                        fill="currentColor" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M8.21733 0C3.83133 0.000666667 1.5 2.81067 1.5 5.87467C1.5 7.29533 2.294 9.068 3.56533 9.63C3.928 9.79333 3.88 9.594 4.192 8.40067C4.21667 8.30133 4.204 8.21533 4.124 8.12267C2.30667 6.02067 3.76933 1.69933 7.958 1.69933C14.02 1.69933 12.8873 10.0873 9.01267 10.0873C8.014 10.0873 7.27 9.30333 7.50533 8.33333C7.79067 7.178 8.34933 5.936 8.34933 5.10333C8.34933 3.00467 5.22267 3.316 5.22267 6.09667C5.22267 6.956 5.52667 7.536 5.52667 7.536C5.52667 7.536 4.52067 11.6 4.334 12.3593C4.018 13.6447 4.37667 15.7253 4.408 15.9047C4.42733 16.0033 4.538 16.0347 4.6 15.9533C4.69933 15.8233 5.91533 14.0887 6.256 12.8347C6.38 12.378 6.88867 10.5247 6.88867 10.5247C7.224 11.13 8.19067 11.6367 9.22067 11.6367C12.2847 11.6367 14.4993 8.94333 14.4993 5.60133C14.4887 2.39733 11.7467 0 8.21733 0V0Z"
                                                        fill="currentColor" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">
                                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0)">
                                                    <path
                                                        d="M9.99984 4.66669H11.9998C12.4376 4.66669 12.871 4.75291 13.2754 4.92042C13.6799 5.08794 14.0473 5.33347 14.3569 5.643C14.6664 5.95253 14.9119 6.31999 15.0794 6.72441C15.247 7.12883 15.3332 7.56228 15.3332 8.00002C15.3332 8.43776 15.247 8.87121 15.0794 9.27563C14.9119 9.68005 14.6664 10.0475 14.3569 10.357C14.0473 10.6666 13.6799 10.9121 13.2754 11.0796C12.871 11.2471 12.4376 11.3334 11.9998 11.3334H9.99984M5.99984 11.3334H3.99984C3.5621 11.3334 3.12864 11.2471 2.72423 11.0796C2.31981 10.9121 1.95234 10.6666 1.64281 10.357C1.01769 9.73192 0.666504 8.88408 0.666504 8.00002C0.666504 7.11597 1.01769 6.26812 1.64281 5.643C2.26794 5.01788 3.11578 4.66669 3.99984 4.66669H5.99984"
                                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                                        stroke-linejoin="round" />
                                                    <path d="M5.3335 8H10.6668" stroke="currentColor" stroke-width="1.5"
                                                        stroke-linecap="round" stroke-linejoin="round" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0">
                                                        <rect width="16" height="16" fill="white" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Details Intro Ends Here -->

    <!-- Blog Article Starts Here -->
    <section class="blog-article section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-10">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="blog-article-start">
                                <div class="blogy-counts">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M5.49997 18.9999H2.79999C2.3226 18.9999 1.86477 18.8102 1.5272 18.4727C1.18964 18.1351 1 17.6773 1 17.1999V10.8999C1 10.4226 1.18964 9.96472 1.5272 9.62715C1.86477 9.28959 2.3226 9.09995 2.79999 9.09995H5.49997M11.7999 7.29996V3.69998C11.7999 2.9839 11.5155 2.29715 11.0091 1.79081C10.5028 1.28446 9.81603 1 9.09995 1L5.49997 9.09995V18.9999H15.6519C16.086 19.0048 16.5072 18.8527 16.838 18.5715C17.1688 18.2903 17.3868 17.8991 17.4519 17.4699L18.6939 9.36995C18.733 9.11197 18.7156 8.84856 18.6429 8.59798C18.5701 8.34739 18.4438 8.11562 18.2726 7.91872C18.1013 7.72182 17.8894 7.5645 17.6513 7.45765C17.4133 7.35081 17.1548 7.297 16.8939 7.29996H11.7999Z"
                                            stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>24 Likes</span>
                                </div>
                                <div class="blogy-counts">
                                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M19 13C19 13.5304 18.7893 14.0391 18.4142 14.4142C18.0391 14.7893 17.5304 15 17 15H5L1 19V3C1 2.46957 1.21071 1.96086 1.58579 1.58579C1.96086 1.21071 2.46957 1 3 1H17C17.5304 1 18.0391 1.21071 18.4142 1.58579C18.7893 1.96086 19 2.46957 19 3V13Z"
                                            fill="white" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>195 Comments</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-10">
                            <div class="blog-article-end">
                                {{ $post->long_description }}
                                <div class="blog-article-end-bottom">
                                    <button class="btn-default">
                                        <svg width="16" height="16" viewBox="0 0 20 20" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M5.49997 18.9999H2.79999C2.3226 18.9999 1.86477 18.8102 1.5272 18.4727C1.18964 18.1351 1 17.6773 1 17.1999V10.8999C1 10.4226 1.18964 9.96472 1.5272 9.62715C1.86477 9.28959 2.3226 9.09995 2.79999 9.09995H5.49997M11.7999 7.29996V3.69998C11.7999 2.9839 11.5155 2.29715 11.0091 1.79081C10.5028 1.28446 9.81603 1 9.09995 1L5.49997 9.09995V18.9999H15.6519C16.086 19.0048 16.5072 18.8527 16.838 18.5715C17.1688 18.2903 17.3868 17.8991 17.4519 17.4699L18.6939 9.36995C18.733 9.11197 18.7156 8.84856 18.6429 8.59798C18.5701 8.34739 18.4438 8.11562 18.2726 7.91872C18.1013 7.72182 17.8894 7.5645 17.6513 7.45765C17.4133 7.35081 17.1548 7.297 16.8939 7.29996H11.7999Z"
                                                stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg> Like
                                    </button>
                                    <div class="d-flex align-items-center flex-column flex-lg-row">
                                        <span class="me-3">Share the Post:</span>
                                        <ul class="list-unstyled list-inline social-links mb-0">
                                            <li class="list-inline-item"><a href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M10.6645 2.65667H12.1252V0.112667C11.8732 0.078 11.0065 0 9.99718 0C7.89118 0 6.44851 1.32467 6.44851 3.75933V6H4.12451V8.844H6.44851V16H9.29785V8.84467H11.5278L11.8818 6.00067H9.29718V4.04133C9.29785 3.21933 9.51918 2.65667 10.6645 2.65667Z"
                                                                fill="currentColor"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="16" height="16" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a></li>
                                            <li class="list-inline-item"><a href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M16 3.039C15.405 3.3 14.771 3.473 14.11 3.557C14.79 3.151 15.309 2.513 15.553 1.744C14.919 2.122 14.219 2.389 13.473 2.538C12.871 1.897 12.013 1.5 11.077 1.5C9.261 1.5 7.799 2.974 7.799 4.781C7.799 5.041 7.821 5.291 7.875 5.529C5.148 5.396 2.735 4.089 1.114 2.098C0.831 2.589 0.665 3.151 0.665 3.756C0.665 4.892 1.25 5.899 2.122 6.482C1.595 6.472 1.078 6.319 0.64 6.078C0.64 6.088 0.64 6.101 0.64 6.114C0.64 7.708 1.777 9.032 3.268 9.337C3.001 9.41 2.71 9.445 2.408 9.445C2.198 9.445 1.986 9.433 1.787 9.389C2.212 10.688 3.418 11.643 4.852 11.674C3.736 12.547 2.319 13.073 0.785 13.073C0.516 13.073 0.258 13.061 0 13.028C1.453 13.965 3.175 14.5 5.032 14.5C11.068 14.5 14.368 9.5 14.368 5.166C14.368 5.021 14.363 4.881 14.356 4.742C15.007 4.28 15.554 3.703 16 3.039Z"
                                                                fill="currentColor"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="16" height="16" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a></li>
                                            <li class="list-inline-item"><a href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M8.21733 0C3.83133 0.000666667 1.5 2.81067 1.5 5.87467C1.5 7.29533 2.294 9.068 3.56533 9.63C3.928 9.79333 3.88 9.594 4.192 8.40067C4.21667 8.30133 4.204 8.21533 4.124 8.12267C2.30667 6.02067 3.76933 1.69933 7.958 1.69933C14.02 1.69933 12.8873 10.0873 9.01267 10.0873C8.014 10.0873 7.27 9.30333 7.50533 8.33333C7.79067 7.178 8.34933 5.936 8.34933 5.10333C8.34933 3.00467 5.22267 3.316 5.22267 6.09667C5.22267 6.956 5.52667 7.536 5.52667 7.536C5.52667 7.536 4.52067 11.6 4.334 12.3593C4.018 13.6447 4.37667 15.7253 4.408 15.9047C4.42733 16.0033 4.538 16.0347 4.6 15.9533C4.69933 15.8233 5.91533 14.0887 6.256 12.8347C6.38 12.378 6.88867 10.5247 6.88867 10.5247C7.224 11.13 8.19067 11.6367 9.22067 11.6367C12.2847 11.6367 14.4993 8.94333 14.4993 5.60133C14.4887 2.39733 11.7467 0 8.21733 0V0Z"
                                                                fill="currentColor"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="16" height="16" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a></li>
                                            <li class="list-inline-item"><a href="#">
                                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <g clip-path="url(#clip0)">
                                                            <path
                                                                d="M9.99984 4.66669H11.9998C12.4376 4.66669 12.871 4.75291 13.2754 4.92042C13.6799 5.08794 14.0473 5.33347 14.3569 5.643C14.6664 5.95253 14.9119 6.31999 15.0794 6.72441C15.247 7.12883 15.3332 7.56228 15.3332 8.00002C15.3332 8.43776 15.247 8.87121 15.0794 9.27563C14.9119 9.68005 14.6664 10.0475 14.3569 10.357C14.0473 10.6666 13.6799 10.9121 13.2754 11.0796C12.871 11.2471 12.4376 11.3334 11.9998 11.3334H9.99984M5.99984 11.3334H3.99984C3.5621 11.3334 3.12864 11.2471 2.72423 11.0796C2.31981 10.9121 1.95234 10.6666 1.64281 10.357C1.01769 9.73192 0.666504 8.88408 0.666504 8.00002C0.666504 7.11597 1.01769 6.26812 1.64281 5.643C2.26794 5.01788 3.11578 4.66669 3.99984 4.66669H5.99984"
                                                                stroke="currentColor" stroke-width="1.5"
                                                                stroke-linecap="round" stroke-linejoin="round"></path>
                                                            <path d="M5.3335 8H10.6668" stroke="currentColor"
                                                                stroke-width="1.5" stroke-linecap="round"
                                                                stroke-linejoin="round"></path>
                                                        </g>
                                                        <defs>
                                                            <clipPath id="clip0">
                                                                <rect width="16" height="16" fill="white"></rect>
                                                            </clipPath>
                                                        </defs>
                                                    </svg>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Article Ends Here -->

    <!-- Blog Item Feature Starts Here -->
    <section class="blog-item-feature">
        <div class="container">
            <div class="blog-item-feature-heading">
                <h4>You May Also Like</h4>
                <a href="#">View All</a>
            </div>
            <div class="row">
                @foreach ($related_posts as $post)
                    <div class="col-lg-6 col-md-6 mb-4 mb-md-0 mb-lg-0">
                        <div class="blog-item">
                            <div class="blog-item-image">
                                <a href="details.html">
                                    @if ($post->thumbnail)
                                        <img src="{{ asset($post->thumbnail) }}" alt="Image">
                                    @else
                                        <img src="{{ asset('frontend') }}/dist/images/01.jpg" alt="Image">
                                    @endif
                                </a>
                            </div>
                            <div class="blog-item-info">
                                <span class="fs-6 has-line">{{ $post->category->name ?? '' }}</span>
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
                @endforeach
            </div>
        </div>
    </section>
    <!-- Blog Item Feature Ends Here -->

    <!-- Comments Area Starts Here -->
    <section class="comments-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto">
                    <h5>Leave a Comment</h5>
                    <form action="#">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" placeholder="Your email">
                            </div>
                        </div>
                        <textarea class="form-control" placeholder="Your Comments"></textarea>
                        <div class="d-flex justify-content-lg-end">
                            <button type="submit" class="btn-default">Post Commnent</button>
                        </div>
                    </form>
                    <div class="comments-area-content">
                        <h5>Comments <span>(02)</span></h5>
                        <div class="comments">
                            <div class="comments-owner">
                                <div class="comments-owner-image">
                                    <a href="#" class="d-block">
                                        <img src="dist/images/cowner.png" alt="Image">
                                    </a>
                                </div>
                                <div class="comments-owner-text">
                                    <p><a href="#">Kevin</a></p>
                                    <span>2 hours ago</span>
                                </div>
                            </div>
                            <p>
                                Donec pellentesque luctus tortor finibus blandit. Fusce tincidunt lectus augue, quis commodo
                                justo tincidunt eget. Praesent at elit diam.
                            </p>
                        </div>
                        <div class="comments">
                            <div class="comments-owner">
                                <div class="comments-owner-image">
                                    <a href="#" class="d-block">
                                        <img src="dist/images/cowner.png" alt="Image">
                                    </a>
                                </div>
                                <div class="comments-owner-text">
                                    <p><a href="#">Marry</a></p>
                                    <span>2 hours ago</span>
                                </div>
                            </div>
                            <p>
                                Nulla varius enim eu dui venenatis, nec lacinia urna gravida. Vivamus euismod tincidunt eros
                                at bibendum. Proin lacus dolor, posuere et posuere eu, congue posuere lectus. Suspendisse id
                                lorem egestas, volutpat lacus a, auctor justo. Cras ac elementum arcu, eget ornare massa.
                                Donec eget urna magna. Fusce vestibulum arcu eu libero ullamcorper, nec semper dolor
                                bibendum. Mauris laoreet justo massa, vitae venenatis augue dignissim ac.
                            </p>
                        </div>
                    </div>
                    <h5>Write a Replay</h5>
                    <form action="#">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <input type="text" class="form-control" placeholder="Your name">
                            </div>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" placeholder="Your email">
                            </div>
                        </div>
                        <textarea class="form-control" placeholder="Your Comments"></textarea>
                        <div class="d-flex justify-content-lg-end">
                            <button type="submit" class="btn-default">Post Commnent</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Comments Area Ends Here -->
@endsection
