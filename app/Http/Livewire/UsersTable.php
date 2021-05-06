<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;

use App\Models\User;





class UsersTable extends Component
{

    use WithPagination; // para que la paginación se haga via ajax


protected $queryString =[
    'search' =>['except' =>''],
    'perPage'

]; // hace que el valor de query del navegador sea el mismo q el search

    public $search = '';

    public $perPage ='1';


    public function render()
    {
        return view('livewire.users-table', [
            'users' => User::where('name', 'LIKE', "%{$this->search}%")
            ->orWhere('email', 'LIKE', "%{$this->search}%")
        ->paginate($this->perPage)
        ]);
    }

public function clear(){
    $this->search = '';
    $this->page = 1;
    $this->perPage = 1;
}




}
