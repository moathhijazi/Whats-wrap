<style>
    #chat-box{
        background-image: url('https://c4.wallpaperflare.com/wallpaper/829/966/471/black-background-pattern-light-texture-wallpaper-preview.jpg');
        background-repeat: no-repeat ;
        background-size: 100%; 
    }
    *::-webkit-scrollbar{display: none ;}
</style>
@if (isset($_SESSION['chatWith']))

    <div class="w-full h-14">
        <div class="w-full p-2 h-14 bg-gray-700  flex justify-between items-center">

            
            <div class="flex items-center space-x-3 h-full">
                <img class="h-full mx-4" src="{{ url('images/') .'/'. $get_user($_SESSION['chatWith'] , 'avatar') }}" alt="profile">
                <span class="text-white">{{ $get_user($_SESSION['chatWith'] , 'username') }}</span>
            </div>
            <div class="flex items-center space-x-3">
                <button onclick="scrollChat()" title="Scroll down" class="h-8 w-8 rounded-full hover:bg-gray-500 transition flex justify-center items-center text-gray-300">
                    <span>
                        <svg viewBox="0 0 19 20" height="20" width="20" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" xml:space="preserve"><path fill="currentColor" d="M3.8,6.7l5.7,5.7l5.7-5.7l1.6,1.6l-7.3,7.2L2.2,8.3L3.8,6.7z"></path></svg>

                    </span>
                </button>
                <button title="Refresh" onclick="refresh_chat()" class="h-8 w-8 rounded-full hover:bg-gray-500 transition flex justify-center items-center text-gray-300">
                    <span>
                        <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="" version="1.1" id="ee51d023-7db6-4950-baf7-c34874b80976" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="currentColor" d="M12,20.664c-2.447,0.006-4.795-0.966-6.521-2.702c-0.381-0.381-0.381-1,0-1.381c0.381-0.381,1-0.381,1.381,0 l0,0c2.742,2.742,7.153,2.849,10.024,0.244c0.4-0.361,1.018-0.33,1.379,0.07c0.36,0.398,0.33,1.013-0.066,1.375 C16.502,19.813,14.292,20.666,12,20.664z M19.965,14.552c-0.539,0-0.977-0.437-0.977-0.976c0-0.085,0.011-0.17,0.033-0.253 c1.009-3.746-1.105-7.623-4.8-8.804c-0.51-0.175-0.782-0.731-0.607-1.241c0.17-0.495,0.7-0.768,1.201-0.619 c4.688,1.498,7.371,6.416,6.092,11.169C20.793,14.255,20.407,14.551,19.965,14.552z M3.94,14.162 c-0.459-0.001-0.856-0.321-0.953-0.769C1.939,8.584,4.858,3.801,9.613,2.533c0.52-0.144,1.058,0.161,1.201,0.681 c0.144,0.52-0.161,1.058-0.681,1.201c-0.005,0.001-0.01,0.003-0.015,0.004C6.37,5.418,4.07,9.187,4.895,12.977 c0.114,0.527-0.221,1.048-0.748,1.162C4.079,14.154,4.01,14.162,3.94,14.162z"></path></svg>
                    </span>
                </button>
                <button onclick="dropdownOptions()" title="Options" class="h-8 w-8 rounded-full hover:bg-gray-500 transition flex justify-center items-center text-gray-300">
                    <span>
                        <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="currentColor" d="M12,7c1.104,0,2-0.896,2-2c0-1.105-0.895-2-2-2c-1.104,0-2,0.894-2,2 C10,6.105,10.895,7,12,7z M12,9c-1.104,0-2,0.894-2,2c0,1.104,0.895,2,2,2c1.104,0,2-0.896,2-2C13.999,9.895,13.104,9,12,9z M12,15 c-1.104,0-2,0.894-2,2c0,1.104,0.895,2,2,2c1.104,0,2-0.896,2-2C13.999,15.894,13.104,15,12,15z"></path></svg>

                    </span>
                

                </button>


                    <div id="options-dropdown" class="z-10 hidden absolute right-4 rounded top-20 bg-white divide-y divide-gray-100  shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white" onclick="closeChat()">Close chat</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Delete chat</a>
                            </li>
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                            </li>
                        </ul>
                        <div class="py-2">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white ">Block</a>
                        </div>
                    </div>
            

            </div>
        </div>
    </div>

    <main class="w-full" style="height : 84.7%; " id="chat-box">
        
        @include('component.chat.content')

        
    </main>


    <div class="w-full h-14 bg-gray-700 ">
        
        <div class="flex items-center h-full space-x-5" id="input">
            <div id="emoji-dropup" style="left : 30.4%; bottom : 85px ; width : 500px" class="z-10 hidden absolute rounded bg-white divide-y divide-gray-100  shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        
                <div class="flex flex-wrap" style="max-height : 300px; width : 500px; overflow-y: scroll; ">
                    @foreach ($emojis as $emoji)
                        <button class="w-10 h-10 rounded hover:bg-gray-400 transition" onclick="addEmoji('{{ $emoji }}')">
                            <span>{{ $emoji }}</span> 
                        </button>
                    @endforeach
                </div>
            
            </div>
        <div class="flex justify-evenly items-center" style="width : 10%">
                <button title="Emojis" onclick="dropupEmojis()" class="h-full rounded-full  transition" style="wdith : 40%; ">
                    <span>
                        <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="fill-gray-300 text-gray-400" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="currentColor" d="M9.153,11.603c0.795,0,1.439-0.879,1.439-1.962S9.948,7.679,9.153,7.679 S7.714,8.558,7.714,9.641S8.358,11.603,9.153,11.603z M5.949,12.965c-0.026-0.307-0.131,5.218,6.063,5.551 c6.066-0.25,6.066-5.551,6.066-5.551C12,14.381,5.949,12.965,5.949,12.965z M17.312,14.073c0,0-0.669,1.959-5.051,1.959 c-3.505,0-5.388-1.164-5.607-1.959C6.654,14.073,12.566,15.128,17.312,14.073z M11.804,1.011c-6.195,0-10.826,5.022-10.826,11.217 s4.826,10.761,11.021,10.761S23.02,18.423,23.02,12.228C23.021,6.033,17.999,1.011,11.804,1.011z M12,21.354 c-5.273,0-9.381-3.886-9.381-9.159s3.942-9.548,9.215-9.548s9.548,4.275,9.548,9.548C21.381,17.467,17.273,21.354,12,21.354z  M15.108,11.603c0.795,0,1.439-0.879,1.439-1.962s-0.644-1.962-1.439-1.962s-1.439,0.879-1.439,1.962S14.313,11.603,15.108,11.603z"></path></svg>
                    </span>
                </button>
                <button>
                    <span>
                        <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="fill-gray-300 text-gray-400" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="currentColor" d="M1.816,15.556v0.002c0,1.502,0.584,2.912,1.646,3.972s2.472,1.647,3.974,1.647 c1.501,0,2.91-0.584,3.972-1.645l9.547-9.548c0.769-0.768,1.147-1.767,1.058-2.817c-0.079-0.968-0.548-1.927-1.319-2.698 c-1.594-1.592-4.068-1.711-5.517-0.262l-7.916,7.915c-0.881,0.881-0.792,2.25,0.214,3.261c0.959,0.958,2.423,1.053,3.263,0.215 c0,0,3.817-3.818,5.511-5.512c0.28-0.28,0.267-0.722,0.053-0.936c-0.08-0.08-0.164-0.164-0.244-0.244 c-0.191-0.191-0.567-0.349-0.957,0.04c-1.699,1.699-5.506,5.506-5.506,5.506c-0.18,0.18-0.635,0.127-0.976-0.214 c-0.098-0.097-0.576-0.613-0.213-0.973l7.915-7.917c0.818-0.817,2.267-0.699,3.23,0.262c0.5,0.501,0.802,1.1,0.849,1.685 c0.051,0.573-0.156,1.111-0.589,1.543l-9.547,9.549c-0.756,0.757-1.761,1.171-2.829,1.171c-1.07,0-2.074-0.417-2.83-1.173 c-0.755-0.755-1.172-1.759-1.172-2.828l0,0c0-1.071,0.415-2.076,1.172-2.83c0,0,5.322-5.324,7.209-7.211 c0.157-0.157,0.264-0.579,0.028-0.814c-0.137-0.137-0.21-0.21-0.342-0.342c-0.2-0.2-0.553-0.263-0.834,0.018 c-1.895,1.895-7.205,7.207-7.205,7.207C2.4,12.645,1.816,14.056,1.816,15.556z"></path></svg>

                    </span>
                </button>
                
        </div>
            <textarea autofocus placeholder="Type a message..." id="chat-input" class="placeholder:text-gray-300 h-9 placeholder:pl-3 rounded bg-gray-500 resize-none focus:outline-none flex items-center pt-1 pl-2  text-gray-200 no-spellcheck"  style="width : 85%; " cols="1" rows="1"></textarea>
            <div class="flex justify-center items-center" style="width : 5%;" id="send-btn">
                <button onclick="sendMessage()">
                    <span>
                        <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="text-green-700" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="currentColor" d="M1.101,21.757L23.8,12.028L1.101,2.3l0.011,7.912l13.623,1.816L1.112,13.845 L1.101,21.757z"></path></svg>
                    </span>
                </button>
            </div>

        </div>
    </div>
    
@else 
    <div id="backup"></div>
    @include('component.chat.empty')
@endif
