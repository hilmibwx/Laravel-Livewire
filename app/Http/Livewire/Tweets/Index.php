<?php

namespace App\Http\Livewire\Tweets;

use App\Models\Tweet;
use Livewire\Component;

class Index extends Component
{

    public function render()
    {
        $tweets = Tweet::latest()->get();

        return view('livewire.tweets.index', compact('tweets'));
    }
}
