<div id="shadow" class="hidden absolute w-full h-full inset-0 bg-black opacity-70"></div>

<div id="modal" class="hidden absolute w-full h-full inset-0 flex justify-center items-center">
        <div id="modal-content" class="w-1/2 bg-gray-600 rounded p-2">
            <div id="modal-head" class="border-b border-gray-500 flex justify-between items-center p-2">
                <h1 class="text-gray-300 font-medium text-xl">
                    Add Contact
                </h1>
                <button onclick=" modal()" class="w-7 h-7 rounded-full hover:bg-gray-500 transition text-2xl font-bold flex justify-center items-center text-white">
                    &times;
                </button>
            </div>
            <div id="modal-body" class="p-2">
                <div class="w-full border-b border-gray-500">
                    <input onkeyup="searchContact()" autocomplete="off" type="text" id="search" placeholder="Search Contact ..." class="placeholder:text-gray-200 focus:outline-none w-full rounded bg-gray-500 h-11 text-gray-300 pl-2">
                </div>
               
                <div class="w-full p-2" style="height : 500px">
                    
                    <ul class="w-full h-full" id="recent" style="overflow-y : scroll">
                        @include('component.extensions.search')
                    </ul>
                </div>
            </div>
        </div>
</div>