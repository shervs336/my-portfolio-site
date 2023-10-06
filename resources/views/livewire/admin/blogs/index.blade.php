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
        @if($addBlog)
            @include('livewire.admin.blogs.create')
        @endif
        @if($updateBlog)
            @include('livewire.admin.blogs.update')
        @endif
    </div>
    <div class="w-full">
        @if(!$addBlog && !$updateBlog)
        <div class="bg-white shadow-lg py-4 px-4">
            <div class="card-body">
                @if(!$addBlog)
                <div class="w-full mb-3">
                    <button wire:click="addBlog()" class="shadow uppercase text-xs tracking-wide text-white bg-gray-500 hover:bg-bray-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">Add New Blog</button>
                </div>
                @endif
                <div class="w-full">
                    <table class="table-auto w-full">
                        <thead class="bg-blue-100 uppercase text-xs">
                            <tr>
                                <th class="text-left p-3">Title</th>
                                <th class="text-left p-3">Excerpt</th>
                                <th class="text-left p-3">Content</th>
                                <th class="p-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($blogs) > 0)
                                @foreach ($blogs as $blog)
                                    <tr class="text-sm">
                                        <td class="p-3">
                                            {{$blog->title}}
                                        </td>
                                        <td class="p-3">
                                            {{$blog->excerpt}}
                                        </td>
                                        <td class="p-3">
                                            {{$blog->content}}
                                        </td>
                                        <td class="text-center p-3">
                                            <button class="shadow uppercase text-xs tracking-wide text-white bg-gray-500 hover:bg-bray-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded" wire:click="editBlog({{$blog->id}})" class="btn btn-primary btn-sm">Edit</button>
                                            <button class="shadow uppercase text-xs tracking-wide text-white bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded" wire:click="deleteBlog({{$blog->id}})" class="btn btn-danger btn-sm">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="3" class="text-center p-3">
                                        No Posts Found.
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
