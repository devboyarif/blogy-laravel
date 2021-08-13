<div>
    <!-- Search Area Starts Here -->
    <section class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 text-center mx-auto">
                    @if ($searchTerm && $isSearch)
                        <h4>‘{{ $searchTerm }}’ here’s what we’ve got</h4>
                    @endif
                    <form wire:submit.prevent="searchitems">
                        <div class="form">
                            <div class="search-area-input">
                                <input wire:model="searchTerm" type="text" placeholder="Search here..">
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
            <div class="row">
                @forelse ($all_posts as $post)
                    <x-single-post :post="$post" :bigPost="$bigPost" />
                @empty
                    <div class="text-center">No post found</div>
                @endforelse

                @if ($loadbutton && $total >= 5)
                    @if (count($all_posts) >= $total)
                        <div class="text-center">No more post found</div>
                    @else
                        <div class="text-center mt-3">
                            <button wire:click="loadMore" wire:loading.remove class="btn btn-primary">Load More
                                Post</button>
                            <button wire:loading class="btn btn-primary">
                                <i class="fas fa-circle-notch fa-spin"></i>
                                &nbsp;Loading
                            </button>
                        </div>
                    @endif
                @endif
            </div>
        </div>
    </section>
    <!-- Blog Item Ends Here -->
</div>
