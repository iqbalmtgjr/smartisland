<div>
    <div class="row">
        <div class="col-lg-12 col-sm-12">
            <div class="card m-b-30">
                <div class="card-body">
                    <h1>Ini belajar livewire</h1>
                    <div>
                        <input type="number" class="form-control" wire:model='keranjang'>
                        <button class="btn btn-success" wire:click='plus'>+</button>
                        @if ($keranjang >= 1)
                            <button class="btn btn-danger" wire:click='minus'>-</button>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
