<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\CobaImunisasi;

class ImunisasiFilter extends Component
{ 
    use WithPagination;
    public $name = '';
    public $tanggal = '';

    protected $queryString = ['name', 'tanggal'];
    
    public function updatingName()
    {
        $this->resetPage();
    }

    public function updatingTanggal()
    {
        $this->resetPage();
    }
    public function res(){
        $this->resetPage();
    }

    public function render()
    {

        if ($this->name) {
            $imunisasi = CobaImunisasi::whereHas('Anak', function ($query) {
                $query->where('name', 'like', '%' . $this->name . '%');
            })->paginate(10);
        }
        else{
            $imunisasi = CobaImunisasi::with(['Anak','Ortu'])->paginate(5);
        }

       
        

        return view('livewire.imunisasi-filter', [
            'imunisasi' => $imunisasi,
        ])->layout('layouts\admin\imunisasi');;
    }
}
