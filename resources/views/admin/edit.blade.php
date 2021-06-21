<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Event') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">

                    <div class="flex h-screen bg-gray-200 items-center justify-center  mt-32 mb-32">
                        <div class="grid bg-white rounded-lg shadow-xl w-11/12 md:w-9/12 lg:w-1/2">
                            <div class="flex justify-center py-4">
                                <div class="flex bg-green-300 rounded-full md:p-4 p-2 border-2 border-green-400">
                                    <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"></path>
                                    </svg>
                                </div>
                            </div>

                            <div class="flex justify-center">
                                <div class="flex">
                                    <h1 class="text-gray-600 font-bold md:text-2xl text-xl">Edit Event Form</h1>
                                </div>
                            </div>
                            <form action="{{ url('/admin/edit/'.$event->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                {{method_field('PATCH')}}
                                <div class="grid grid-cols-1 mt-5 mx-7">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Title</label>
                                    <input class="py-2 px-3 rounded-lg border-2 border-green-400 mt-1 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" name="title" value="{{$event->title}}" id="title" type="text" placeholder="Title" />
                                </div>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-5 md:gap-8 mt-5 mx-7">
                                    <div class="grid grid-cols-1">
                                        <label for="date" class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Date/s</label>
                                        <input class="py-2 px-3 rounded-lg border-2 border-green-400 mt-1 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" value="{{date('d/m/Y', strtotime($event->date))}}" type="date" id="date" name="date" />
                                    </div>
                                    <div class="grid grid-cols-1">
                                        <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Available places</label>
                                        <input class="py-2 px-3 rounded-lg border-2 border-green-400 mt-1 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" name="capacity" value="{{$event->capacity}}" id="capacity" type="text" placeholder="Available places" />
                                    </div>
                                </div>

                                <div class="grid grid-cols-1 mt-5 mx-7">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Type of event</label>
                                    
                                    <input type="radio" name="isFavorite" value="1">
                                    <span>Favorite</span>

                                    <input type="radio" name="isFavorite" value="0">
                                    <span>Not Favorite</span>

                                </div>
                                

                                <div class="grid grid-cols-1 mt-5 mx-7">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold">Description</label>
                                    <textarea rows="6" class="py-2 px-3 rounded-lg border-2 border-green-400 mt-1 focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-transparent" name="description" id="description">{{$event->description}}</textarea>

                                </div>

                                <div class="grid grid-cols-1 mt-5 mx-7">
                                    <label class="uppercase md:text-sm text-xs text-gray-500 text-light font-semibold mb-1">Upload Photo</label>
                                    <div class='flex items-center justify-center w-full'>
                                        <label class='flex flex-col border-4 border-dashed w-full h-32 hover:bg-gray-100 hover:border-green-400 group'>
                                            @if($event->image)

                                            <div class='flex flex-col items-center justify-center align-center pt-7'>
                                                <img src="{{ asset('storage').'/'.$event->image }}" width="120" alt="">
                                                @endif
                                                <svg class="w-10 h-10 text-green-300 group-hover:text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                                </svg>
                                                <p class='lowercase text-sm text-gray-400 group-hover:text-green-500 pt-1 tracking-wider'>Select a photo</p>
                                            </div>



                                            <input type='file' class="hidden" name="image" value="image" id="image" />
                                        </label>
                                    </div>
                                </div>

                                <div class='flex items-center justify-center  md:gap-8 gap-4 pt-5 pb-5'>
                                    <button class='w-auto bg-gray-500 hover:bg-gray-700 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Cancel</button>
                                    <button class='w-auto bg-green-400 hover:bg-green-300 rounded-lg shadow-xl font-medium text-white px-4 py-2'>Save</button>
                                </div>

                        </div>
                    </div>
                    </form>


                </div>
            </div>
        </div>
    </div>
</x-app-layout>