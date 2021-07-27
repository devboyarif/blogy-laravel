<div class="card">
    <div class="card-header  bg-dark text-light">
        Category Create
    </div>
    <div class="card-body">
        <form wire:submit.prevent="store()">
            <div class="form-group">
                <label for="cat">Name</label>
                <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Enter Name">
                @error('name') <span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Create</button>
            </div>
        </form>
    </div>
</div>
