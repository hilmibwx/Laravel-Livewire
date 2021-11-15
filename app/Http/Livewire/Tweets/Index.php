<?php

namespace App\Http\Livewire\Tweets;

use App\Models\Tweet;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;


    protected $paginationTheme = 'bootstrap';

    public $tweetId;

    public $perPage = 10;

    protected $listener = ['tweetAdded'];

    public function tweetAdded($tweetId){}

    public function loadMore()
    {
        $this->perPage += 10;
    }

    public function render()
    {
        $tweets = Tweet::with('user')->latest()->paginate($this->perPage);

        return view('livewire.tweets.index', compact('tweets'));
    }
}
