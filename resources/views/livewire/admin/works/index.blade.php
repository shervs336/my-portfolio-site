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
        @if($addWork)
            @include('livewire.admin.works.create')
        @endif
        @if($updateWork)
            @include('livewire.admin.works.update')
        @endif
    </div>
    <div class="w-full">
        @if(!$addWork && !$updateWork)
        <div class="bg-white shadow-lg py-4 px-4">
            <div class="card-body">
                @if(!$addWork)
                <div class="w-full mb-3">
                    <button wire:click="addWork()" class="shadow uppercase text-xs tracking-wide text-white bg-gray-500 hover:bg-bray-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded">Add New Work</button>
                </div>
                @endif
                <div class="w-full">
                    <table class="table-auto w-full">
                        <thead class="bg-blue-100 uppercase text-xs">
                            <tr>
                                <th class="text-left p-3">Title</th>
                                <th class="text-left p-3">Caption</th>
                                <th class="p-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($works) > 0)
                                @foreach ($works as $work)
                                    <tr class="text-sm">
                                        <td class="p-3">
                                            {{$work->title}}
                                        </td>
                                        <td class="p-3">
                                            {{$work->caption}}
                                        </td>
                                        <td class="text-center p-3">
                                            <button class="shadow uppercase text-xs tracking-wide text-white bg-gray-500 hover:bg-bray-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded" wire:click="editWork({{$work->id}})" class="btn btn-primary btn-sm">Edit</button>
                                            <button class="shadow uppercase text-xs tracking-wide text-white bg-red-500 hover:bg-red-400 focus:shadow-outline focus:outline-none font-bold py-2 px-4 rounded" wire:click="deleteWork({{$work->id}})" class="btn btn-danger btn-sm">Delete</button>
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
