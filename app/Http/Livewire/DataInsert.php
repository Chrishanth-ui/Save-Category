<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Category as CategoryModel;

class DataInsert extends Component
{

    public $new_name;
    public $list_data=[];
    public $category_id = 0;
    
    public $search_key;
    public $delete_id=0;

    public function addNew() 
    {
        # code...
        // return dd('here');
        $this->dispatchBrowserEvent('show-form');
    }

    public function saveData()
    {
        # code...
        if ($this->category_id == 0) {
        $data=new CategoryModel();
        $data->name=$this->new_name;
        $data->save();
        $this->clearData();
        } else {
            $data = CategoryModel::find($this->category_id);
            $data->name=$this->new_name;
            $data->save();
            $this->clearData();
            $this->dispatchBrowserEvent('hide-form-edit');   
        }
    }

    public function clearData()
    {
        # code...
        $this->new_name="";
        $this->category_id = 0;
        $this->dispatchBrowserEvent('hide-form');
        // $this->dispatchBrowserEvent('hide-form-edit');  
        
        
    }

    public function fetchData()
    {
        # code...
        

        if ($this->search_key) {
            #search by key
            $this->list_data=CategoryModel::where('name', 'LIKE', '%' . $this->search_key . '%')->get();
        } else {
        
            $this->list_data=CategoryModel::all();
        }
    }

    #update
    public function updateData($id)
    {
        # code...
        $data = CategoryModel::find($id);
        $this->new_name = $data->name;
        $this->category_id = $id;
        $this->dispatchBrowserEvent('show-form-edit');   
    }

    public function showDelete($id) 
    {
        # code...
        // return dd('here');
        $this->delete_id=$id;
        $this->dispatchBrowserEvent('show-delete-form');
    }

    #delete
    public function deleteData()
    {
        # code...
        if($this->delete_id!=0){
            $data = CategoryModel::find($this->delete_id);
            $data->delete();
           
        }
        $this->delete_id=0;
        $this->dispatchBrowserEvent('hide-delete-form'); 
    }

    public function render()
    {
        $this->fetchData();
        return view('livewire.data-insert')->layout('layouts.navigation');
    }
}
