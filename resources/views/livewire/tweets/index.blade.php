<div>
    <div class="card">
        <div class="card-header">
            Timeline
        </div>
        <div class="card-body">
            @foreach ($tweets as $tweet)
                @livewire('tweets.single', ['tweet' => $tweet], key($tweet->id))
            @endforeach

            {{-- {{ $tweets->links() }} //use pagination --}}
            @if ($tweets->hasMorePages())
                <button class="btn btn-primary" wire:click.prevent="loadMore">Load More</button>
            @endif
        </div>
    </div>
</div>
