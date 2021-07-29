<div>
    <table class="table">
        <thead>
            <tr class="text-center">
                <th>Id</th>
                <th>Name</th>
                <th>Short Description</th>
                <th>Status</th>
                <th>Featured</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td class="text-center">{{ $post->id }}</td>
                    <td class="text-center">{{ $post->title }}</td>
                    <td class="text-center">{{ $post->short_description }}</td>

                    <td class="text-center">
                        <div>
                            <label class="switch ">
                                @if ($post->status == 1)
                                    <input wire:click="statusChange({{ $post->id }},0)" type="checkbox"
                                        class="success toggle-switch" checked>
                                @else
                                    <input wire:click="statusChange({{ $post->id }},1)" type="checkbox"
                                        class="success toggle-switch">
                                @endif
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </td>
                    <td class="text-center">
                        <div>
                            <label class="switch ">
                                @if ($post->featured == 1)
                                    <input wire:click="featuredChange({{ $post->id }},0)" type="checkbox"
                                        class="success toggle-switch" checked>
                                @else
                                    <input wire:click="featuredChange({{ $post->id }},1)" type="checkbox"
                                        class="success toggle-switch">
                                @endif
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </td>

                    <td class="text-center">
                        {{-- edit --}}
                        <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-info">Edit</a>
                        {{-- delete method 2 --}}
                        <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()"
                            wire:click="delete({{ $post->id }})" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
            @empty
                @include('components.notfound')
            @endforelse
        </tbody>
    </table>
    @if ($loadbutton && $total >= 5)
        @if (count($posts) >= $total)
            <div class="text-center">No more data found</div>
        @else
            <div class="text-center mt-3">
                <button wire:click="load" wire:loading.remove class="btn btn-primary">Load More
                    Data</button>
                <button wire:loading class="btn btn-primary">
                    <i class="fas fa-circle-notch fa-spin"></i>
                    &nbsp;Loading
                </button>
            </div>
        @endif
    @endif
</div>
