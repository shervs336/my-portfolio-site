<div>
    <div class="w-full mb-2">
        @if(session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session()->get('success') }}
            </div>
        @endif
        @if(session()->has('error'))
            <div class="alert alert-danger" role="alert">
                {{ session()->get('error') }}
            </div>
        @endif
        @if($addCategory)
            @include('livewire.admin.categories.create')
        @endif
        @if($updateCategory)
            @include('livewire.admin.categories.update')
        @endif
    </div>
    <div class="w-full">
        @if(!$addCategory && !$updateCategory)
        <div class="bg-white shadow-lg py-4 px-4">
            <div class="card-body">
                @if(!$addCategory)
                <div class="w-full mb-3">
                    <button wire:click="addCategory()" class="shadow uppercase text-xs tracking-wide text-white bg-gray-500 hover:bg-bray-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">Add New Category</button>
                </div>
                @endif
                <div class="w-full">
                    <table class="table-auto w-full">
                        <thead class="bg-blue-100 uppercase text-xs">
                            <tr>
                                <th class="text-left p-3">Name</th>
                                <th class="text-left p-3">Parent</th>
                                <th class="p-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($categories) > 0)
                                @foreach ($categories as $category)
                                    <tr class="text-sm">
                                        <td class="p-3">
                                            {{$category->name}}
                                        </td>
                                        <td class="p-3">
                                            {{$category->parent ? $category->parent->name : ''}}                                            
                                        </td>
                                        <td class="text-center p-3">
                                            <button class="shadow uppercase text-xs tracking-wide text-white bg-gray-500 hover:bg-bray-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded mb-1" wire:click="editCategory({{$category->id}})" class="btn btn-primary btn-sm">Edit</button>
                                            <button class="shadow uppercase text-xs tracking-wide text-white bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded mb-1" wire:click="deleteCategory({{$category->id}})" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="4" class="text-center p-3">
                                        No Categories Found.
                                    </td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        @endif
    </div>
 
</div>
