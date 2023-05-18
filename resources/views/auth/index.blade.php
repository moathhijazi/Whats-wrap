<?php 
//session_start() ; 
?>
<div class="w-full h-full ">
    @if (isset($_SESSION['auth']) && $_SESSION['auth'] === 'signin')
        @include('auth.signin')
    @else 
        @include('auth.signup')
    @endif
</div>

<div id="auth-res">
</div>
<ul id="chat-scroll"></ul>