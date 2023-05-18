<header class="w-full flex justify-center items-center h-12 bg-gray-500">

    <button class=" h-full w-20 text-gray-700 capitalize font-medium border-b-2 bg-gray-400" >sign in</button>
    <button class=" h-full w-20 text-gray-700 capitalize font-medium hover:bg-gray-600 transition" onclick="authToggle('signup') ">sign up</button>

</header>

<div class="w-full flex justify-center items-center" style="height: 93.2%;">
    <div class="text-white">
        @if (isset($recent_accounts))
            <div class="w-full flex flex-wrap justify-center" >

                <div id="card" class="rounded bg-gray-500 flex flex-col justify-center items-center p-2 hover:bg-gray-400 cursor-pointer transition" style="width : 45%">
                    <img class="w-1/2" src="{{ url('images/profile.png') }}" alt="profile">
                    <span class="mt-2 font-medium">
                        username
                    </span>
                </div>
               
            </div>
        @else
            @include('component.chat.empty')
        @endif


        <div class="p-2 mt-3 mx-auto " style="width : 60% ;">
            <div class="my-2">
                <span class="text-red-500" id="signin-res"></span>
            </div>
            <input id="email" type="text" class="w-full h-10 my-1 rounded bg-gray-500 focus:outline-none text-white pl-2 placeholder:text-gray-300 " placeholder="Email address ..." autocomplete="off">
            <input id="password" type="password" class="w-full h-10 my-1 rounded bg-gray-500 focus:outline-none text-white pl-2 placeholder:text-gray-300 " placeholder="Password ..." autocomplete="off">
            <button class="p-2 h-10 w-full rounded mt-2 hover:opacity-90 transition" style=" background :#008a6c ;" onclick="signin()">Sign in</button>
        </div>
    </div>
</div>