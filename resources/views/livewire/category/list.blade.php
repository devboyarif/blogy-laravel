<tr>
    <td>{{ $category->id }}</td>
    <td>{{ $category->name }}</td>
    <td>
        <div>
            <label class="switch ">
                @if ($category->status == 1)
                    <input wire:click="statusChange({{ $category->id }},0)" type="checkbox"
                        class="success toggle-switch" checked>
                @else
                    <input wire:click="statusChange({{ $category->id }},1)" type="checkbox"
                        class="success toggle-switch">
                @endif
                <span class="slider round"></span>
            </label>
        </div>
    </td>
    <td>
        <div>
            <label class="switch ">
                @if ($category->featured == 1)
                    <input wire:click="featuredChange({{ $category->id }},0)" type="checkbox"
                        class="success toggle-switch" checked>
                @else
                    <input wire:click="featuredChange({{ $category->id }},1)" type="checkbox"
                        class="success toggle-switch">
                @endif
                <span class="slider round"></span>
            </label>
        </div>
    </td>
    <td>
        {{-- edit --}}
        <button wire:click="edit({{ $category->id }})" class="btn btn-info">Edit</button>
        {{-- delete method 2 --}}
        <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()"
            wire:click="delete({{ $category->id }})" class="btn btn-danger">Delete</button>
    </td>
</tr>
