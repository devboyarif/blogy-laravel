<div class="card">
    <div class="card-header  bg-dark text-light">
        Tag Edit
    </div>
    <div class="card-body">
        <form wire:submit.prevent="update()">
            <div class="form-group">
                <label for="cat">Name</label>
                <input wire:model="name" type="text" class="form-control @error('name') is-invalid @enderror"
                    placeholder="Enter Name">
                @error('name') <span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <button class="btn btn-primary">Update</button>
                <button type="button" wire:click="cancel" class="btn btn-danger">Cancel</button>
            </div>
        </form>
    </div>
</div>
