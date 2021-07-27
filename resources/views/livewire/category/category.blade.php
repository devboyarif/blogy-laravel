<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-dark text-light">
                Category List
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($categories as $category)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $category->name }}</td>
                                <td>
                                    {{-- edit --}}
                                    <button wire:click="edit({{ $category->id }})" class="btn btn-info">Edit</button>
                                    {{-- delete method 2 --}}
                                    <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()"
                                        wire:click="delete({{ $category->id }})"
                                        class="btn btn-danger">Delete</button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="6"> Nothing Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                @if (count($categories) >= $total)
                    <div class="text-center">No more data found</div>
                @else
                    <div class="text-center mt-3">
                        <button wire:click="load" wire:loading.attr="disabled" class="btn btn-primary">Load More
                            Data</button>
                    </div>
                @endif

            </div>
        </div>
    </div>
    <div class="col-4">
        @if ($updateMode)
            @include('livewire.category.edit')
        @else
            @include('livewire.category.create')
        @endif
    </div>
</div>
