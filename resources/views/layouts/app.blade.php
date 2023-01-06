<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('favicon/manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{asset('favicon/ms-icon-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">
    <title>What To Do API</title>

    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    {{--    @vite('resources/js/clipboard.min.js')--}}
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<div class="sticky top-0 bg-white md:h-12 sm:block shadow z-30">
    <div class="container mx-auto flex  justify-between items-center h-full p-2">
        <a href="{{route('home')}}" class="md:text-xl font-bold whitespace-nowrap">
            &#128161; What To Do<span class="text-blue-500"> API</span>
        </a>

        <div class="hidden md:flex space-x-2 md:space-x-4">
            <a href="{{route('home')}}"
               class="font-medium text-gray-700 border-b-2 border-transparent hover:border-blue-500 px-2 @if(request()->routeIs('home')) border-blue-600 @endif ">{{__('Home')}}</a>
            <a href="{{route('tasks.create')}}"
               class="font-medium text-gray-700 border-b-2 border-transparent hover:border-blue-500 px-2 @if(request()->routeIs('tasks.create')) border-blue-600 @endif ">{{__('Add')}}</a>
            <a href="{{route('documentation')}}"
               class="font-medium text-gray-700 border-b-2 border-transparent hover:border-blue-500 px-2 @if(request()->routeIs('documentation')) border-blue-600 @endif ">{{__('Docs')}}</a>
        </div>
        <div class="flex justify-center items-center  md:hidden ">
            <div
                x-data="{
            open: false,
            toggle() {
                if (this.open) {
                    return this.close()
                }

                this.$refs.button.focus()

                this.open = true
            },
            close(focusAfter) {
                if (! this.open) return

                this.open = false

                focusAfter && focusAfter.focus()
            }
        }"
                x-on:keydown.escape.prevent.stop="close($refs.button)"
                x-on:focusin.window="! $refs.panel.contains($event.target) && close()"
                x-id="['dropdown-button']"
                class="relative flex"
            >
                <!-- Button -->
                <button
                    x-ref="button"
                    x-on:click="toggle()"
                    :aria-expanded="open"
                    :aria-controls="$id('dropdown-button')"
                    type="button"

                >
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-5 w-5" :class="open ? 'fill-blue-500':'fill-gray-700'">
                        <path
                            d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z"/>
                    </svg>
                </button>

                <!-- Panel -->
                <div
                    x-ref="panel"
                    x-show="open"
                    x-transition.origin.top.left
                    x-on:click.outside="close($refs.button)"
                    :id="$id('dropdown-button')"
                    style="display: none;"
                    class="absolute right-0 mt-8 w-40 rounded-md bg-white shadow-md"
                >
                    <a href="{{route('home')}}"
                       class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm @if(request()->routeIs('home')) text-blue-600 @endif hover:bg-blue-50">
                        {{__('Home')}}
                    </a>

                    <a href="{{route('tasks.create')}}"
                       class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm @if(request()->routeIs('/')) text-blue-600 @endif hover:bg-blue-50">
                        {{__('Add')}}
                    </a>

                    <a href="{{route('documentation')}}"
                       class="flex items-center gap-2 w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm @if(request()->routeIs('/')) text-blue-600 @endif hover:bg-blue-50">
                        {{__('Docs')}}
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>


<main class="grow relative">
    {{ $slot }}
</main>


<footer>
    <p class="p-2 text-center border-t bg-white text-gray-700 text-sm font-medium">
        All rights reserved - &#128161; What To Do <span class="text-blue-500">API</span>
    </p>
</footer>

@livewireScripts
@stack('scripts')
</body>
</html>
