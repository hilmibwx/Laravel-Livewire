<?php

namespace App\Http\Livewire\Tweets;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $perPage = 10;

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $tweets = Tweet::latest()->paginate($this->perPage);

        return view('livewire.tweets.index', compact('tweets'));
    }
}
