<div>
    @if (session('message'))
    <div class="alert alert-success">
        {{ session('message') }}
    </div>
    @endif
    <div class="card mb-3">
        <div class="card-header">Update Your Tweet.</div>
        <div class="card-body">
            <form action="#" method="post" wire:submit.prevent="addTweet">
                <div class="form-group">
                    <textarea style="resize: none" name="body" class="form-control" placeholder="what's on your mind ?" wire:model="body"></textarea>
                    @error('body')
                        <span class="mt-2 text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="text-right">
                    <button type="submit" class="btn btn-primary" @error('body') disabled @enderror>Tweet</button>
                </div>
            </form>
        </div>
    </div>
</div>
