// const chatScroll = document.querySelector('#chat-scroll') ; 

function scrollChat() {
    const chatScroll = document.querySelector('#chat-scroll') ; 
    chatScroll.scrollTop = chatScroll.scrollHeight;
}

function dropdownOptions() {
    const dropdownOptions = document.querySelector('#options-dropdown');
    dropdownOptions.classList.toggle('hidden')
}

function dropdownAccount() {
    const dropdownOptions = document.querySelector('#account-dropdown');
    dropdownOptions.classList.toggle('hidden')
}

function dropupEmojis() {
    const dropdownOptions = document.querySelector('#emoji-dropup');
    dropdownOptions.classList.toggle('hidden')
}

function addEmoji(em) {
    const chatInput = document.querySelector('#chat-input') ;
    chatInput.value = chatInput.value+em ;
    
}

function sendMessage() {
    const chatInput = document.querySelector('#chat-input') ;
    const chatInputHidden = document.querySelector('#chat-input-hidden') ;
    const chatScroll = document.querySelector('#chat-scroll') ;
    const message = `
    <li class="w-full py-1 flex justify-end" id="active">
          
        <div class="inline-block p-2 rounded-lg" style="max-width : 50% ; background :#008a6c ;">
            <div class="w-full flex flex-col">
                <span>${chatInput.value}</span>
                <div class="w-full flex justify-end  items-center space-x-2" style="font-size : 11px">
                    <span>7:20 PM</span>
                    <span>
                        <svg viewBox="0 0 16 11" height="11" width="16" preserveAspectRatio="xMidYMid meet" class="" fill="none"><path d="M11.0714 0.652832C10.991 0.585124 10.8894 0.55127 10.7667 0.55127C10.6186 0.55127 10.4916 0.610514 10.3858 0.729004L4.19688 8.36523L1.79112 6.09277C1.7488 6.04622 1.69802 6.01025 1.63877 5.98486C1.57953 5.95947 1.51817 5.94678 1.45469 5.94678C1.32351 5.94678 1.20925 5.99544 1.11192 6.09277L0.800883 6.40381C0.707784 6.49268 0.661235 6.60482 0.661235 6.74023C0.661235 6.87565 0.707784 6.98991 0.800883 7.08301L3.79698 10.0791C3.94509 10.2145 4.11224 10.2822 4.29844 10.2822C4.40424 10.2822 4.5058 10.259 4.60313 10.2124C4.70046 10.1659 4.78086 10.1003 4.84434 10.0156L11.4903 1.59863C11.5623 1.5013 11.5982 1.40186 11.5982 1.30029C11.5982 1.14372 11.5348 1.01888 11.4078 0.925781L11.0714 0.652832ZM8.6212 8.32715C8.43077 8.20866 8.2488 8.09017 8.0753 7.97168C7.99489 7.89128 7.8891 7.85107 7.75791 7.85107C7.6098 7.85107 7.4892 7.90397 7.3961 8.00977L7.10411 8.33984C7.01947 8.43717 6.97715 8.54508 6.97715 8.66357C6.97715 8.79476 7.0237 8.90902 7.1168 9.00635L8.1959 10.0791C8.33132 10.2145 8.49636 10.2822 8.69102 10.2822C8.79681 10.2822 8.89838 10.259 8.99571 10.2124C9.09304 10.1659 9.17556 10.1003 9.24327 10.0156L15.8639 1.62402C15.9358 1.53939 15.9718 1.43994 15.9718 1.32568C15.9718 1.1818 15.9125 1.05697 15.794 0.951172L15.4386 0.678223C15.3582 0.610514 15.2587 0.57666 15.1402 0.57666C14.9964 0.57666 14.8715 0.635905 14.7657 0.754395L8.6212 8.32715Z" fill="currentColor"></path></svg>
                    </span>

                </div>
            </div>
        </div>

    </li>`;
    const oldpayload = chatScroll.innerHTML ; 
    if(chatInput.value != '') {
        chatScroll.innerHTML = oldpayload + message

    }
    chatInputHidden.value = chatInput.value ;
    chatInput.value = null ; 
    chatInput.focus() ; 

    $.ajax({
        url : "api/message" , 
        type : "POST" , 
        data : {
            
            text : $('#chat-input-hidden').val()
            
        } , 
        success : () => {
            scrollChat()
        } , 
        error : (err) => {
            console.log(err);
        }

    })
}

function authToggle(to) {

    $.ajax({
        url : "api/toggle" , 
        type : "post" , 
        data : {to} , 
        success : (res) => {
            $('#auth-res').html(res)
        },
        error : (err) => {
            console.log(err);
        }
    })
}

function signin() {

    $.ajax({
        url : "api/signin" , 
        type : "POST" , 
        data : {
            email : $("#email").val()  ,
            password : $("#password").val()
        } , 
        success : (res) => {
            $("#signin-res").html(res) ; 
        } , 
        error : (err) => {
            console.log(err);
        }
    })
}

function signup() {

    $.ajax({
        url : "api/signup" , 
        type : "POST" , 
        data : {
            username : $("#username").val()  ,
            email : $("#email").val()  ,
            password : $("#password").val()
        } , 
        success : (res) => {
            $("#signup-res").html(res) ; 
        } , 
        error : (err) => {
            console.log(err);
        }
    })
}

function signout() {

    $.ajax({
        url : "api/signout" , 
        type : "POST" , 
        
        success : (res) => {
            $("#chat-res").html(res) ; 
        }
    })
}

function refresh_contact() {
    $.ajax({
        url : "api/refresh_contact" , 
        type : "POST" , 
        
        success : (res) => {
            $("#contact").html(res) ; 
        },
        error : (err) => {
            console.log(err);
        }
    })
}

function refresh_chat() {
    
    $.ajax({
        url : "api/refresh_chat" , 
        type : "POST" , 
        
        success : (res) => {
            
            $("#chat-box").html(res) ; 
            
            scrollChat()
        },
        error : (err) => {
            console.log(err);
        }
    })
   
    document.querySelector('#chat-input').focus();
}

function chatWith(id) {

    $.ajax({
        url : "api/chat_with" , 
        type : "POST" , 
        data : {id} ,
        success : (res) => {
            $("#backup").html(res) ; 
            $("#chat-box").html(res) ; 
        } , 
        error : (err) => {
            console.log(err);
        }
    })
}

function closeChat() {
    $.ajax({
        url : "api/close" , 
        type : "POST" , 
       
        success : (res) => {
            $("#chat-box").html(res) ; 
        } , 
        error : (err) => {
            console.log(err);
        }
    })
}

function modal() {
    const shadow  = document.querySelector('#shadow') ; 
    const modal  = document.querySelector('#modal') ; 

    shadow.classList.toggle('hidden')
    modal.classList.toggle('hidden')
}

function searchContact() {

    $.ajax({

        url  : "api/search_contact" , 
        type : "POST" , 
        data : {
            search : $("#search").val()
        },
        success : (res) => {
            $("#recent").html(res) ; 
        } , 
        error : (err) => {
            console.log(err);
        }
    })

}

scrollChat()


