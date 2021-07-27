<div class="row">
    <div class="col-8">
        <div class="card">
            <div class="card-header bg-dark text-light">
                <h5>Tag List</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @each('livewire.tag.list', $tags, 'tag', 'components.notfound')
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="col-4">
        @if ($updateMode)
            @include('livewire.tag.edit')
        @else
            @include('livewire.tag.create')
        @endif
    </div>
</div>
