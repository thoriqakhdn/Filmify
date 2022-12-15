<?php

namespace App\Http\Livewire;

use App\Models\Movies;
use Livewire\Component;

class SearchDropdown extends Component
{
    public $search = '';
    public function render(Movies $movie)
    {
        $searchResults = [];

        if (strlen($this->search) >= 2) {
            $searchResults = $movie->Where('title', 'LIKE', '%' . $this->search . '%')->get();
        }
        return view('livewire.search-dropdown', [
            'searchResults' => $searchResults,
        ]);
    }
}
