@extends('layouts.website')

@section('data')
    <!-- Search Area Starts Here -->
    <section class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center mx-auto">
                    <h4>‘Travel’ here’s what we’ve got</h4>
                    <form action="#">
                        <div class="form">
                            <div class="search-area-input">
                                <input type="text" placeholder="Travel">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                            </div>
                            <button type="submit" class="btn btn-default">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Search Area Ends Here -->

    <!-- Blog Item Starts Here -->
    <section class="section-padding">
        <div class="container">
            @livewire('post.all-post')
        </div>
    </section>
    <!-- Blog Item Ends Here -->
@endsection
