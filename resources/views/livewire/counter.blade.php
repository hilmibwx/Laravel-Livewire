<div class="card">
    <div class="card-header">{{ __('Dashboard') }}</div>

    <div class="card-body">
        <div class="form-inline">
            <button class="btn btn-primary" wire:click.prevent="decrease">
                -
            </button>
            <span class="mx-3">{{ $counter }}</span>
            <button class="btn btn-primary" wire:click.prevent="increase">
                +
            </button>
        </div>
    </div>
</div>