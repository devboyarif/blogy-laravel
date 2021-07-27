<?php

namespace App\Http\Livewire\Category;

use App\Models\Category as Categoryy;
use App\Traits\Notification;
use Livewire\Component;


class Category extends Component
{
    use Notification;

    public $categories, $name, $category_id, $updateMode = false;

    // Data Redering
    public function render()
    {
        $this->categories = Categoryy::all();
        return view('livewire.category.category');
    }

    // Data Restore
    public function resetInputFields()
    {
        $this->reset();
    }

    // Data Store
    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);

        Categoryy::create($validatedDate);

        $this->notifySuccess('Category Created Successfully');

        $this->resetInputFields();
    }

    // Data Edit
    public function edit($id)
    {
        $category = Categoryy::findOrFail($id);
        $this->category_id = $id;
        $this->name = $category->name;
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
        $validatedDate = $this->validate([
            'name' => 'required',
        ]);

        $category = Categoryy::find($this->category_id);
        $category->update($validatedDate);

        $this->updateMode = false;
        $this->resetInputFields();
    }

    // Data Delete
    public function delete($id)
    {
        Categoryy::findOrFail($id)->delete();
    }
}
