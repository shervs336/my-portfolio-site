<div class="bg-white shadow-lg p-4">
    <div class="card-body">
        <form class="w-full max-w-lg">
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="name">Name:</label>
                <input type="text" class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('slug') is-invalid @enderror" id="name" wire:model="name" placeholder="Enter name">
            </div>   
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="parent_id">Parent:</label>
                <select class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('excerpt') is-invalid @enderror" id="parent_id" wire:model="parent_id" placeholder="Enter parent">
                    <option value></option>
                    @foreach($parentOptions as $option)
                        <option value="{{ $option->id }}">{{ $option->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-grid gap-2">
                <button wire:click.prevent="storeCategory()" class="shadow uppercase text-xs tracking-wide text-white bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">Save</button>
                <button wire:click.prevent="cancelCategory()" class="shadow uppercase text-xs tracking-wide text-white bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">Cancel</button>
            </div>
        </form>
    </div> 
</div>