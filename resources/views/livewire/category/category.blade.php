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
                                {{-- <td>
                                <div>
                                    <label class="switch ">

                                        @if ($student->status == 1)
                                            <input wire:click="statusChange({{ $student->id }},0)"
                                                type="checkbox" class="success toggle-switch" checked>
                                        @else
                                            <input wire:click="statusChange({{ $student->id }},1)"
                                                type="checkbox" class="success toggle-switch">
                                        @endif
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </td> --}}
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
            </div>
        </div>
    </div>
    <div class="col-4">
        @if ($updateMode)
            <div class="card">
                <div class="card-header  bg-dark text-light">
                    Category Edit
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="update()">
                        <div class="form-group">
                            <label for="cat">Name</label>
                            <input wire:model="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name">
                            @error('name') <span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Update</button>
                            <button type="button" wire:click="cancel" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- @include('livewire.edit') --}}
        @else
            <div class="card">
                <div class="card-header  bg-dark text-light">
                    Category Create
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="store()">
                        <div class="form-group">
                            <label for="cat">Name</label>
                            <input wire:model="name" type="text"
                                class="form-control @error('name') is-invalid @enderror" placeholder="Enter Name">
                            @error('name') <span class="invalid-feedback">{{ $message }}</span>@enderror
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary">Create</button>
                        </div>
                    </form>
                </div>
            </div>
            {{-- @include('livewire.create') --}}
        @endif

    </div>
</div>
