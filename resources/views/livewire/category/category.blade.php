<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-dark text-light">
                <div class="row">
                    <div class="col-8">
                        <h5>Category List</h5>
                    </div>
                    <div class="col-4">
                        <input wire:model="searchTerm" type="text" class="form-control" placeholder="Search">
                    </div>
                </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Status</th>
                            <th>Featured</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @each('livewire.category.list', $categories, 'category', 'components.notfound')
                    </tbody>
                </table>

                @if ($loadbutton && $total >= 5)
                    @if (count($categories) >= $total)
                        <div class="text-center">No more data found</div>
                    @else
                        <div class="text-center mt-3">
                            <button wire:click="load" wire:loading.attr="disabled" class="btn btn-primary">Load More
                                Data</button>
                        </div>
                    @endif
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
