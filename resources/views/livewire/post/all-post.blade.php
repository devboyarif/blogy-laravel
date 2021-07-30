<div class="row">
    @forelse ($all_posts as $post)
        <x-single-post :post="$post" :bigPost="$bigPost" />
    @empty
        No post found
    @endforelse

    @if ($loadbutton && $total >= 5)
        @if (count($all_posts) >= $total)
            <div class="text-center">No more post found</div>
        @else
            <div class="text-center mt-3">
                <button wire:click="loadMore" wire:loading.remove class="btn btn-primary">Load More Post</button>
                <button wire:loading class="btn btn-primary">
                    <i class="fas fa-circle-notch fa-spin"></i>
                    &nbsp;Loading
                </button>
            </div>
        @endif
    @endif
</div>
