<div class="bg-white shadow-lg p-4">
    <div class="card-body">
        <form class="w-full max-w-lg">
            <div>
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="title">Title:</label>
                <input type="text" class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white @error('title') is-invalid @enderror" id="title" placeholder="Enter Title" wire:model="title">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="description">Caption:</label>
                <textarea class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('caption') is-invalid @enderror" id="caption" wire:model="caption" placeholder="Enter Caption"></textarea>
                @error('caption')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="overlayColor">Overlay Color:</label>
                <input class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('overlayColor') is-invalid @enderror" id="overlayColor" wire:model="overlayColor" placeholder="Enter Overlay Color Eg [blue-500]">
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="websiteLink">Website Link:</label>
                <input class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('websiteLink') is-invalid @enderror" id="websiteLink" wire:model="websiteLink" placeholder="Enter Website Link">
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="backgroundImagePath">Backround Image:</label>
                <input type="file" class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('backroundImagePath') is-invalid @enderror" id="backgroundImagePath" wire:model="backgroundImagePath" placeholder="Upload Image">
                @if($backgroundImagePath)
                    <div>
                        Photo Preview:
                        <img src="{{ $backgroundImagePath->temporaryUrl() }}" />
                    </div>
                @endif
            </div>
            <div class="d-grid gap-2">
                <button wire:click.prevent="storeWork()" class="shadow uppercase text-xs tracking-wide text-white bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">Save</button>
                <button wire:click.prevent="cancelWork()" class="shadow uppercase text-xs tracking-wide text-white bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">Cancel</button>
            </div>
        </form>
    </div>
</div>