<?php

namespace App\Http\Livewire\Category;

use App\Models\Category as Categoryy;
use App\Traits\Notification;
use Livewire\Component;


class Category extends Component
{
    use Notification;

    public $loadbutton = true, $total, $count = 5;
    public $searchTerm;
    public $categories, $name, $category_id, $updateMode = false;


    // Data Redering
    public function render()
    {
        $searchTerm = '%' . $this->searchTerm . '%';
        $this->categories = Categoryy::where('name', 'LIKE', $searchTerm)->take($this->count)->latest()->get();
        $this->total = Categoryy::count();

        return view('livewire.category.category');
    }

    // Load More Data
    public function load()
    {
        $this->count += 5;
    }

    // Data Search
    public function updatingSearchTerm($value)
    {
        if ($value) {
            $this->loadbutton = false;
            $this->count = Categoryy::count();
        } else {
            $this->loadbutton = true;
            $this->count = 5;
        }
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
                'name' => 'required|unique:categories,name',
            ]);
        } else {
            return $this->validate([
                'name' => "required|unique:categories,name,{$this->category_id}",
            ]);
        }
    }

    // Data Store
    public function store()
    {
        $validatedDate = $this->validation();

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
        $validatedDate = $this->validation('Put');

        $category = Categoryy::find($this->category_id);
        $category->update($validatedDate);

        $this->updateMode = false;
        $this->resetInputFields();
        $this->notifySuccess('Category Updated Successfully');
    }

    // Data Delete
    public function delete($id)
    {
        Categoryy::findOrFail($id)->delete();
        $this->notifySuccess('Category Deleted Successfully');
    }
}
