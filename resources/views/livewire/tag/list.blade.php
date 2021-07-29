<tr>
    <td>{{ $tag->id }}</td>
    <td>{{ $tag->name }}</td>
    <td>
        {{-- edit --}}
        <button wire:click="edit({{ $tag->id }})" class="btn btn-info">Edit</button>
        {{-- delete method 2 --}}
        <button onclick="confirm('Confirm delete?') || event.stopImmediatePropagation()"
            wire:click="delete({{ $tag->id }})" class="btn btn-danger">Delete</button>
    </td>
</tr>
