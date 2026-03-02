<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title') - MWS</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <meta name="robots" content="index, follow"/>
        <meta name="keywords" content="@yield('keywords')"/>
        <meta name="description" content="@yield('description')"/>
        <!--=============== css  ===============-->
        <link type="text/css" rel="stylesheet" href="{{asset('css/plugins.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/style.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/color.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/chat.css')}}">
        <!--=============== favicons ===============-->
        <link rel="shortcut icon" href="{{asset('images/favicon.ico')}}">
    </head>
    <body>

    @include('components.theme.preloader')

{{--main body starts--}}

    {{--theme header--}}
    @include('components.theme.header')

    {{--theme left sidebar--}}
    @include('components.theme.leftHeader')

    <!-- share button-->
    <div class="share-btn showshare color-bg"><span>Share <i class="fal fa-plus"></i></span></div>
    <!-- share button end-->

    <!-- right header-->
    <div class="hc_dec_color">
        <div class="page-subtitle"><span></span></div>
    </div>
    <!-- right header end-->

    <!-- wrapper  -->
    <div id="wrapper">
        <!-- navigation menu-->
        @include('components.theme.navigation')
        <!-- navigation menu end  -->

        {{--main body of each page--}}
        @yield('content')

        <!-- share-wrapper-->
        <div class="share-wrapper">
            <div class="close-share-btn"><i class="fal fa-long-arrow-left"></i></div>
            <div class="share-container fl-wrap  isShare"></div>
        </div>
        <!-- share-wrapper  end -->

        <!-- cursor-->
        <div class="element">
            <div class="element-item"></div>
        </div>
        <!-- cursor end-->
    </div>

    <button id="mws-chat-trigger" class="mws-chat-btn">
        <svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
    </button>

    <div id="mws-chat-container" class="mws-chat-window mws-hidden">
        <div class="mws-chat-header">
            <div class="mws-header-info">
                <strong>MWS AI Assistant</strong>
                <span>Garment Sourcing Support</span>
            </div>
            <button id="mws-close-btn">&times;</button>
        </div>

        <div id="chat-box" class="mws-chat-body">
            <div class="mws-msg mws-incoming">
                <div class="mws-bubble">
                    Hello! How can I assist you with Many Wear Sourcing today?
                </div>
            </div>
        </div>

        <div id="typing" class="mws-typing mws-hidden">Searching records...</div>

        <form id="chat-form" class="mws-chat-footer">
            @csrf
            <input type="text" id="user-input" placeholder="Type your inquiry..." autocomplete="off">
            <button type="submit">Send</button>
        </form>
    </div>

{{--main body ends--}}
        <script   src="{{asset('js/jquery.min.js')}}"></script>
        <script   src="{{asset('js/plugins.js')}}"></script>
        <script   src="{{asset('js/scripts.js')}}"></script>

    <script>
        /**
         * MWS AI Assistant - Frontend Logic
         * Features: LocalStorage Persistence, Auto-Scroll, Popup Toggling
         */

        const mwsChatTrigger = document.getElementById('mws-chat-trigger');
        const mwsChatContainer = document.getElementById('mws-chat-container');
        const mwsCloseBtn = document.getElementById('mws-close-btn');
        const mwsChatForm = document.getElementById('chat-form');
        const mwsChatBox = document.getElementById('chat-box');
        const mwsTyping = document.getElementById('typing');
        const mwsUserInput = document.getElementById('user-input');

        // 1. Toggle Chat Visibility
        mwsChatTrigger.onclick = () => {
            mwsChatContainer.classList.toggle('mws-hidden');
            scrollToBottom();
        };

        mwsCloseBtn.onclick = () => {
            mwsChatContainer.classList.add('mws-hidden');
        };

        // 2. Scroll Logic: Always keep the latest message in view
        function scrollToBottom() {
            mwsChatBox.scrollTop = mwsChatBox.scrollHeight;
        }

        // 3. Persistence: Save current UI state to browser memory
        function saveHistory() {
            localStorage.setItem('mws_chat_history', mwsChatBox.innerHTML);
            scrollToBottom();
        }

        // 4. Persistence: Load history when the page/route changes
        document.addEventListener('DOMContentLoaded', () => {
            const saved = localStorage.getItem('mws_chat_history');
            if (saved) {
                mwsChatBox.innerHTML = saved;
                // Timeout ensures the DOM is fully rendered before scrolling
                setTimeout(scrollToBottom, 50);
            }
        });

        // 5. Chat Interaction Logic
        mwsChatForm.onsubmit = async (e) => {
            e.preventDefault();

            const message = mwsUserInput.value.trim();
            if (!message) return;

            // A. Add User Message (Right Side)
            mwsChatBox.innerHTML += `
        <div class="mws-msg mws-outgoing">
            <div class="mws-bubble">${message}</div>
        </div>`;

            // Clear input and save the state immediately
            mwsUserInput.value = '';
            saveHistory();

            // B. Show Loading Indicator
            mwsTyping.classList.remove('mws-hidden');
            scrollToBottom();

            try {
                // C. Send to Laravel Backend
                const response = await fetch("{{ route('chat.send') }}", {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({ message: message })
                });

                if (!response.ok) throw new Error('Network response was not ok');

                const data = await response.json();

                // D. Add AI Message (Left Side)
                mwsChatBox.innerHTML += `
            <div class="mws-msg mws-incoming">
                <div class="mws-bubble">${data.reply}</div>
            </div>`;

                saveHistory();

            } catch (error) {
                console.error('Error:', error);
                mwsChatBox.innerHTML += `
            <div class="mws-msg mws-incoming">
                <div class="mws-bubble" style="background: #fee2e2; color: #b91c1c;">
                    Sorry, I'm having trouble connecting. Please try again.
                </div>
            </div>`;
            } finally {
                // E. Clean up loading state
                mwsTyping.classList.add('mws-hidden');
                scrollToBottom();
            }
        };

        /**
         * Optional: Clear Chat Functionality
         * You can call this from a button to reset the history
         */
        function clearMWSChat() {
            if(confirm('Are you sure you want to clear the chat history?')) {
                localStorage.removeItem('mws_chat_history');
                location.reload();
            }
        }
    </script>
    </body>
</html>
