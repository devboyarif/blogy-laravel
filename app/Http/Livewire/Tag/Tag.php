<?php

namespace App\Http\Livewire\Tag;

use App\Models\Tag as Tagg;
use App\Traits\Notification;
use Livewire\Component;

class Tag extends Component
{
    use Notification;

    public $tags, $name, $tag_id, $updateMode = false;

    // Data Redering
    public function render()
    {
        $this->tags = Tagg::latest()->get();
        return view('livewire.tag.tag');
    }

    // Data Restore
    public function resetInputFields()
    {
        $this->reset();
    }

    // Data Validation
    public function validation($method = null)
    {
        if (!$method) {
            return $this->validate([
                'name' => 'required|unique:tags,name',
            ]);
        } else {
            return $this->validate([
                'name' => "required|unique:tags,name,{$this->tag_id}",
            ]);
        }
    }

    // Data Store
    public function store()
    {
        $validatedDate = $this->validation();

        Tagg::create($validatedDate);

        $this->notifySuccess('Tag Created Successfully');

        $this->resetInputFields();
    }

    // Data Edit
    public function edit($id)
    {
        $tag = Tagg::findOrFail($id);
        $this->tag_id = $id;
        $this->name = $tag->name;
        $this->updateMode = true;
    }

    // Cancel Edit
    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInputFields();
    }

    // Data Update
    public function update()
    {
        $validatedDate = $this->validation('Put');

        $tag = Tagg::find($this->tag_id);
        $tag->update($validatedDate);

        $this->updateMode = false;
        $this->resetInputFields();
        $this->notifySuccess('Tag Updated Successfully');
    }

    // Data Delete
    public function delete($id)
    {
        Tagg::findOrFail($id)->delete();
        $this->notifySuccess('Tag Deleted Successfully');
    }
}
