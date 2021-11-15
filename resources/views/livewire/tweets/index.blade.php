<div>
    <div class="card">
        <div class="card-header">
            Timeline
        </div>
        <div class="card-body">
            @foreach ($tweets as $tweet)
                @livewire('tweets.single', ['tweet' => $tweet], key($tweet->id))
            @endforeach
        </div>
    </div>
</div>
