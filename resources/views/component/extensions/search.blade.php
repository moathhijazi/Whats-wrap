@if (isset($search_result))
    @foreach ($search_result as $contact)
    
        <li class="w-full h-14 border-b border-gray-500 p-2 flex justify-between items-center">
            <div class="h-full flex items-center space-x-3">
                <img src="{{ url('images/profile.png') }}" alt="contact" class="h-full">
                <div class="flex flex-col">
                <span class="text-gray-300 font-medium">{{ $contact->username }}</span>
                <span class="text-gray-300 text-xs">Available to add</span>
                </div>
            </div>
            <button style="background : #008a6c;" class="rounded h-full px-5 text-white hover:opacity-80 transition">
                <span class="text-sm">
                    Request
                </span>
            </button>
        </li>
      
            
       
    @endforeach    
@else
    <div id="empty" class="flex justify-center items-center w-full h-full">
        <p class="text-gray-300">No Recent Search</p>
    </div>
@endif