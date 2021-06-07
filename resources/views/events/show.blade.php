<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Event Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                <form action="{{ url('/events/edit/'.$event->id)}}" method="post" enctype="multipart/form-data">
                <div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Event
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Available places
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Dates
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only"></span>
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                <div class="flex-shrink-0 h-10 w-10">
                    <img class="h-10 w-10 rounded-full" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhBHeVDXhLvIS4Ls5PnvDo3CCwhAd8ScJ0_w&usqp=CAU" alt=""> <!-- <img src="{{asset('storage').'/'.$event->photo}}"> Seguido del comando en terminal: php artisan storage:link  // Copiar y pegar el <img> en el edit.blade para que aparezca -->
                  </div>
                  <div class="ml-4">
                  <div class="text-gray-600">{{$event->title}}</div>
                  </div>
                </div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Laravel 8 for Beginners</div>
                <div class="text-sm text-gray-500">Life is CRUD(e)</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  12/20
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                28/09/2021 - 19/10/2021
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
             
                <a href="{{url('/events/edit/'.$event->id)}}" class="bg-white text-indigo-600 hover:text-indigo-900">Edit</a>
            
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
               <!-- <form action="{{ url('/events/'.$event->id)}}" method="post">
                @csrf
                {{method_field('DELETE')}}
                  <input type="submit" class="bg-white text-red-600 hover:text-red-900" 
                  onclick="return confirm('Are you sure you want to permanently remove this item?')" value="Delete">
                </form>-->
              </td>
              
            </tr>
            
          </tbody>
            
        </table>
        
      </div>
      
    </div>
    
  </div>
  
</div>

            </div>
        </div>

        <div class="flex justify-center pt-8">
         
        </div>
    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>