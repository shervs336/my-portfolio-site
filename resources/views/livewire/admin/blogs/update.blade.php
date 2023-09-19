<div class="card">
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
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="excerpt">Excerpt:</label>
                <textarea class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('caption') is-invalid @enderror" id="excerpt" wire:model="excerpt" placeholder="Enter excerpt"></textarea>
                @error('excerpt')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="content">Content:</label>
                <input class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('overlayColor') is-invalid @enderror" id="content" wire:model="content" placeholder="Create a content">
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="slug">Enter slug:</label>
                <input class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('slug') is-invalid @enderror" id="slug" wire:model="slug" placeholder="Enter slug">
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="meta_title">Meta Title:</label>
                <input class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('meta_title') is-invalid @enderror" id="meta_title" wire:model="meta_title" placeholder="Enter title">
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="meta_description">Meta description:</label>
                <input class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('meta_title') is-invalid @enderror" id="meta_description" wire:model="meta_description" placeholder="Enter description">
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="alt_image">Enter alt image:</label>
                <input class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('alt_image') is-invalid @enderror" id="alt_image" wire:model="alt_image" placeholder="Enter alt image">
            </div>
            <div class="form-group mb-3">
                <label class="block tracking-wide uppercase text-gray-700 font-bold text-xs mb-2" for="main_image">Main image:</label>
                <input type="file" class="apperance-none block w-full bg-gray-200 text-gray-700 border rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white  @error('main_image') is-invalid @enderror" id="main_image" wire:model="main_image" placeholder="Upload Image">
                @if($main_image)
                    <div>
                        Photo Preview:
                        <img src="{{ asset('storage/'.$main_image) }}" />
                    </div>
                @endif
            </div>
            <div class="d-grid gap-2">
                <button wire:click.prevent="updateBlog()" class="shadow uppercase text-xs tracking-wide text-white bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">Update</button>
                <button wire:click.prevent="cancelBlog()" class="shadow uppercase text-xs tracking-wide text-white bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">Cancel</button>
            </div>
        </form>
    </div>
</div>