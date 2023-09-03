<div class="card">
    <div class="card-body">
        <form>
            <div class="form-group mb-3">
                <label for="title">Title:</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" wire:model="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="caption">Caption:</label>
                <textarea class="form-control @error('caption') is-invalid @enderror" id="caption" wire:model="caption" placeholder="Enter caption"></textarea>
                @error('caption')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label for="overlayColor">Overlay Color:</label>
                <input class="form-control @error('overlayColor') is-invalid @enderror" id="overlayColor" wire:model="overlayColor" placeholder="Enter Overlay Color Eg [blue-500]">
            </div>
            <div class="form-group mb-3">
                <label for="websiteLink">Website Link:</label>
                <input class="form-control @error('websiteLink') is-invalid @enderror" id="websiteLink" wire:model="websiteLink" placeholder="Enter Website Link">
            </div>
            <div class="form-group mb-3">
                <label for="backgroundImagePath">Backround Image:</label>
                <input type="file" class="form-control @error('backroundImagePath') is-invalid @enderror" id="backgroundImagePath" wire:model="backgroundImagePath" placeholder="Upload Image">
                @if($backgroundImagePath)
                    <div>
                        Photo Preview:
                        <img src="{{ $backgroundImagePath->temporaryUrl() }}" />
                    </div>
                @endif
            </div>
            <div class="d-grid gap-2">
                <button wire:click.prevent="updateWork()" class="btn btn-success btn-block">Update</button>
                <button wire:click.prevent="cancelWork()" class="btn btn-secondary btn-block">Cancel</button>
            </div>
        </form>
    </div>
</div>