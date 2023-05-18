<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <title>Whatswrap</title>
</head>
<body>  

    @if (isset($_SESSION['user']['id']))
        <section class="w-full h-full p-4 bg-gray-800 flex justify-center items-center transition " style="height : 100vh; overflow : hidden; ">
            <div id="chat-res"></div>
            @include('component.extensions.modal')
            <div class=" bg-gray-800 border-r border-gray-500  " style="height : 98%; width : 30%;  " >
                <header class="w-full p-2 h-14 bg-gray-700  flex justify-between items-center mb-1">
                <div class="h-full flex items-center space-x-3">
                    <img class="h-full" src="{{ url('images/profile.png') }}" alt="profile">
                    <span class="text-gray-300 font-medium">{{ $_SESSION['user']['username'] }}</span>
                </div>
                <div class="flex space-x-3">
                    <button  title="Refresh contact" onclick="refresh_contact()" class="w-8 h-8 rounded-full hover:bg-gray-600 flex justify-center items-center text-gray-300 transition">
                        <span>
                            <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="" version="1.1" id="df9d3429-f0ef-48b5-b5eb-f9d27b2deba6" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="currentColor" d="M12.072,1.761c-3.941-0.104-7.579,2.105-9.303,5.65c-0.236,0.486-0.034,1.07,0.452,1.305 c0.484,0.235,1.067,0.034,1.304-0.45c1.39-2.857,4.321-4.637,7.496-4.553c0.539,0.02,0.992-0.4,1.013-0.939s-0.4-0.992-0.939-1.013 C12.087,1.762,12.079,1.762,12.072,1.761z M1.926,13.64c0.718,3.876,3.635,6.975,7.461,7.925c0.523,0.13,1.053-0.189,1.183-0.712 c0.13-0.523-0.189-1.053-0.712-1.183c-3.083-0.765-5.434-3.262-6.012-6.386c-0.098-0.53-0.608-0.88-1.138-0.782 C2.178,12.6,1.828,13.11,1.926,13.64z M15.655,21.094c3.642-1.508,6.067-5.006,6.201-8.946c0.022-0.539-0.396-0.994-0.935-1.016 c-0.539-0.022-0.994,0.396-1.016,0.935c0,0.005,0,0.009,0,0.014c-0.107,3.175-2.061,5.994-4.997,7.209 c-0.501,0.201-0.743,0.769-0.543,1.27c0.201,0.501,0.769,0.743,1.27,0.543C15.642,21.1,15.648,21.097,15.655,21.094z"></path><path fill="#009588" d="M19,1.5c1.657,0,3,1.343,3,3s-1.343,3-3,3s-3-1.343-3-3S17.343,1.5,19,1.5z"></path></svg>
                        </span>
                    </button>
                    
                    <div id="account-dropdown" class="z-10 hidden absolute  rounded top-20 bg-white divide-y divide-gray-100  shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                        
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownInformationButton">
                            <li>
                               
                                <a onclick="dropdownAccount() ;modal();" class="cursor-pointer block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Add contact</a>
                            </li>
                            <li>
                                <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Refresh contact</a>
                            </li>
                            <li>
                                <a  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                            </li>

                        </ul>
                        <div class="py-2">
                            <a onclick="signout()" class="cursor-pointer block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white ">Sign out</a>
                        </div>
                    </div>

                    <button onclick="dropdownAccount()" title="Account options" class="w-8 h-8 rounded-full hover:bg-gray-600 flex justify-center items-center text-gray-300 transition">
                        <span>
                            <svg viewBox="0 0 24 24" height="24" width="24" preserveAspectRatio="xMidYMid meet" class="" version="1.1" x="0px" y="0px" enable-background="new 0 0 24 24" xml:space="preserve"><path fill="currentColor" d="M12,7c1.104,0,2-0.896,2-2c0-1.105-0.895-2-2-2c-1.104,0-2,0.894-2,2 C10,6.105,10.895,7,12,7z M12,9c-1.104,0-2,0.894-2,2c0,1.104,0.895,2,2,2c1.104,0,2-0.896,2-2C13.999,9.895,13.104,9,12,9z M12,15 c-1.104,0-2,0.894-2,2c0,1.104,0.895,2,2,2c1.104,0,2-0.896,2-2C13.999,15.894,13.104,15,12,15z"></path></svg>
                        </span>
                    </button>
                    
                </div>
                </header>
                @yield('sidebar')
            </div>
            <main class="bg-gray-700" style="height : 98% ; width : 70% ;">
                @yield('chat')
            </main>
            
        </section>
    @else
        <section class="w-full h-full p-4 bg-gray-800 flex justify-center items-center transition " style="height : 100vh; overflow : hidden; ">
            
            
            <main class="bg-gray-700" style="height : 98% ; width : 70% ;">
                @yield('auth')
            </main>
            
        </section>
    @endif
   
    <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/events.js"></script>
</body>
</html>