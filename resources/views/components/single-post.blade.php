<div class="{{ $column }} mb-5">
    <div class="blog-item {{ $bigPost ? '' : 'blog-item-sm' }}">
        <div class="blog-item-image">
            <a href="{{ route('details', $post->slug) }}">
                @if ($post->thumbnail)
                    <img src="{{ asset($post->thumbnail) }}" alt="Image">
                @else
                    <img src="{{ asset('frontend') }}/dist/images/sm-01.jpg" alt="Image">
                @endif
            </a>
        </div>
        <div class="blog-item-info">
            <span class="fs-6 has-line">{{ $post->category->name ?? '' }}</span>
            <h5><a href="{{ route('details', $post->slug) }}">{{ $post->title }}</a></h5>
            <div class="blog-item-info-release">
                <span>{{ Carbon\Carbon::parse($post->created_at)->format('M d, Y') }}</span> <span
                    class="dot"></span><span>4 min read</span>
            </div>
            <a href="{{ route('details', $post->slug) }}" class="btn btn-link">Read Article
                <svg width="18" height="12" viewBox="0 0 18 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12.5 1.5L17 6M17 6L12.5 10.5M17 6H1" stroke="currentColor" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</div>
