<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

class Musicians extends Component
{

    use WithPagination;
    
    public $search = "";
    public $sortBy = "first_name";
    public $direction = "asc";
    public $paginateAmount = "10";
    protected $queryString = [
        "search" => ["except" => ""],
        "sortBy" => ["except" => ""],
        "direction" => ["except" => ""],
    ];

    public function mount() {
        $this->search = request()->query('search', $this->search);
        $this->sortBy = request()->query('sortBy', $this->sortBy);
        $this->direction = request()->query('direction', $this->direction);
    }


    //Sorting
    public function doSort($field, $direction) {
        $this->sortBy = $field;
        $this->direction= $direction;
    }
    
    //pagination
    public function changePagintaion($value) {
        $this->paginateAmount = $value;
        
        //Couln't figure out how to change the page number bakc to 1 once the pagination chnages
        $this->resetPage();
        $this->goToPage(1);
    }

    public function deleteMusican($id) {
        $musician = \App\Models\Musician::find($id);
        $musician->delete();
    }

    



    public function render()
    {

        $musicians = \App\Models\Musician::where('first_name', 'like', "%$this->search%")
                                       ->orWhere('last_name', 'like', "%$this->search%")
                                       ->orWhere('instrument', 'like', "%$this->search%")
                                       ->orderBy($this->sortBy, $this->direction);
                                       
        return view('livewire.musicians', ['musicians' => $musicians->paginate($this->paginateAmount)]);
    }
}