@if ($contact != null)

    @if (count($contact) > 0 )
        @foreach ($contact as $user)
            <li 
            
            @if($user->owner_id == @$_SESSION['chatWith'] || $user->contact_id == @$_SESSION['chatWith'])
            class="w-full h-16  bg-gray-700 p-2 cursor-pointer border-b border-gray-600 flex items-center space-x-4  overflow-hidden hover:bg-gray-700 transition " 
            @else 
            class="w-full h-16  p-2 cursor-pointer border-b border-gray-600 flex items-center space-x-4  overflow-hidden hover:bg-gray-700 transition " 
                onclick="
                        chatWith(
                        <?php 

                            if($user->owner_id === @$_SESSION['user']['id']) {
                                echo $user->contact_id ; 
                            }else{
                                echo $user->owner_id ; 
                            }
                        
                        ?>
                            )
                    "
                    
            @endif 

            >
             
                <img class="h-full" 
                <?php 
                    if($user->owner_id === @$_SESSION['user']['id']) :
                        echo 'src="images/' . $get_user($user->contact_id, 'avatar') .'"';
                    else :
                        echo 'src="images/' . $get_user($user->owner_id, 'avatar') .'"';
                    endif;
                ?>
                alt="profile">
                <div class="flex flex-col h-full w-full">
                    <div class="flex justify-between items-center">
                        <span class="text-lg  text-gray-300">
                            <?php 
                            if($user->owner_id === @$_SESSION['user']['id']) :
                                echo $get_user($user->contact_id, 'username');
                            else :
                                echo $get_user($user->owner_id, 'username');
                            endif;
                            ?>
                        </span>
                        <small class="font-medium text-gray-400 capitalize">yesterday</small>
                    </div>
                    <div class="flex justify-between items-center">
                        <span class="text-xs text-ellipsis h-5 overflow-hidden text-gray-300" style="width : 60%">{{ $user->title }}</span>
                        <div class=" text-gray-400">
                            <span>
                                {{ $user->status }}
                            </span>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    @else
        <div class="w-full p-4">
            <span class="text-gray-400 text-center font-medium">No contact to display!</span>
        </div>
    @endif

   

@else
    <div class="w-full p-4">
        <span class="text-gray-400 text-center font-medium">No contact to display!</span>
    </div>
@endif