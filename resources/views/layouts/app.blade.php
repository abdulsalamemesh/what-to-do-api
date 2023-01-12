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
    <script type="text/javascript">

        function UnCryptMailto(s) {
            var n = 0;
            var r = "";
            for (var i = 0; i < s.length; i++) {
                n = s.charCodeAt(i);
                if (n >= 8364) {
                    n = 128;
                }
                r += String.fromCharCode(n - (1));
            }
            return r;
        }

        function linkTo_UnCryptMailto(s) {
            location.href = UnCryptMailto(s);
        }

    </script>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    @livewireStyles
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">
<div class="sticky top-0 bg-white md:h-12 sm:block shadow z-30">
    <div class="container mx-auto flex  justify-between items-center h-full py-2 px-4 md:p-2">
        <a href="{{route('home')}}" class="md:text-xl font-bold whitespace-nowrap">
            &#128161; What To Do<span class="text-blue-500"> API</span>
        </a>

        <div class="hidden md:flex space-x-2 md:space-x-4">
            <a href="{{route('home')}}"
               class="font-medium text-gray-700 hover:text-blue-500 px-2 @if(request()->routeIs('home')) border-blue-600 @endif ">{{__('Home')}}</a>
            <a href="{{route('documentation')}}"
               class="font-medium text-gray-700 hover:text-blue-500 px-2 @if(request()->routeIs('documentation')) border-blue-600 @endif ">{{__('Documentation')}}</a>
            <a href="{{route('tasks.create')}}"
               class="font-medium text-gray-700 hover:text-blue-500 px-2 @if(request()->routeIs('tasks.create')) border-blue-600 @endif ">{{__('Contributing')}}</a>

            <a href=" {{route('setLocal',session()->get('applocale') == 'de' ? 'en':'de' )}} "
               class="font-medium text-gray-700 px-2 flex items-center group">

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="h-5 w-auto mr-1 fill-gray-700 group-hover:fill-blue-500">
                    <defs>
                        <style>.fa-secondary {
                                opacity: .4
                            }</style>
                    </defs>
                    <path class="fa-primary"
                          d="M181.9 174.3c-7.688-17.34-36.19-17.34-43.88 0l-64 144c-5.375 12.11 .0625 26.3 12.19 31.69c12 5.359 26.28-.0469 31.69-12.19l8.066-18.15C126.7 319.7 127.3 320 128 320h64c.707 0 1.305-.3418 1.996-.4023l8.066 18.15C206 346.7 214.8 352 224 352c3.281 0 6.594-.6562 9.75-2.062c12.12-5.391 17.56-19.58 12.19-31.69L181.9 174.3zM147.2 272L160 243.1L172.8 272H147.2zM576 63.1L320 64v384l256 0c35.34 0 64-28.66 64-64v-256C640 92.65 611.3 63.1 576 63.1zM552 232h-1.463c-8.082 27.78-21.06 49.29-35.06 66.34c7.854 4.943 13.33 7.324 13.46 7.375c12.22 5 18.19 18.94 13.28 31.19C538.4 346.3 529.5 352 519.1 352c-2.906 0-5.875-.5313-8.75-1.672c-1-.3906-14.33-5.951-31.26-18.19c-16.69 12.04-29.9 17.68-31.18 18.19C445.9 351.5 442.9 352 440 352c-9.562 0-18.59-5.766-22.34-15.2c-4.844-12.3 1.188-26.19 13.44-31.08c.748-.3047 6.037-2.723 13.25-7.189c-3.375-4.123-6.742-8.324-9.938-13.03c-7.469-10.97-4.594-25.89 6.344-33.34c11.03-7.453 25.91-4.594 33.34 6.375c1.883 2.77 3.881 5.186 5.854 7.682C487.3 256.8 494.1 245.5 499.5 232H408C394.8 232 384 221.3 384 208S394.8 184 408 184h48c0-13.25 10.75-24 24-24S504 170.8 504 184h48c13.25 0 24 10.75 24 24S565.3 232 552 232z"/>
                    <path class="fa-secondary"
                          d="M0 127.1v256c0 35.34 28.66 64 64 64L320 448V64L64 63.1C28.66 63.1 0 92.65 0 127.1zM74.06 318.3l64-144c7.688-17.34 36.19-17.34 43.88 0l64 144c5.375 12.11-.0625 26.3-12.19 31.69C230.6 351.3 227.3 352 224 352c-9.188 0-17.97-5.312-21.94-14.25L193.1 319.6C193.3 319.7 192.7 320 192 320H128c-.707 0-1.305-.3418-1.996-.4023l-8.066 18.15c-5.406 12.14-19.69 17.55-31.69 12.19C74.13 344.5 68.69 330.4 74.06 318.3zM172.8 272H147.2L160 243.1L172.8 272z"/>
                </svg>
                <span class="group-hover:text-blue-500">{{ucfirst(['en' =>__('EN'),'de' =>__('DE')][session()->get('applocale') == 'de' ? 'en':'de' ])}}</span>
            </a>
        </div>
        <div class="flex justify-center items-center md:hidden">
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
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-6 w-6" :class="open ? 'fill-blue-500':'fill-gray-700'">
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
                    class="absolute right-0 mt-8 w-40 rounded-md bg-white shadow-md border"
                >
                    <a href="{{route('home')}}"
                       class="flex items-center w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm @if(request()->routeIs('home')) text-blue-600 @endif hover:bg-blue-50">
                        {{__('Home')}}
                    </a>

                    <a href="{{route('tasks.create')}}"
                       class="flex items-center w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm @if(request()->routeIs('/')) text-blue-600 @endif hover:bg-blue-50">
                        {{__('Contributing')}}
                    </a>

                    <a href="{{route('documentation')}}"
                       class="flex items-center w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm @if(request()->routeIs('/')) text-blue-600 @endif hover:bg-blue-50">
                        {{__('Documentation')}}
                    </a>
                    <a href=" {{route('setLocal',session()->get('applocale') == 'de' ? 'en':'de' )}} "
                       class="flex items-center w-full first-of-type:rounded-t-md last-of-type:rounded-b-md px-4 py-2.5 text-left text-sm hover:bg-blue-50">

                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="h-5 w-auto mr-1 fill-gray-700 group-hover:fill-blue-500">
                            <defs>
                                <style>.fa-secondary {
                                        opacity: .4
                                    }</style>
                            </defs>
                            <path class="fa-primary"
                                  d="M181.9 174.3c-7.688-17.34-36.19-17.34-43.88 0l-64 144c-5.375 12.11 .0625 26.3 12.19 31.69c12 5.359 26.28-.0469 31.69-12.19l8.066-18.15C126.7 319.7 127.3 320 128 320h64c.707 0 1.305-.3418 1.996-.4023l8.066 18.15C206 346.7 214.8 352 224 352c3.281 0 6.594-.6562 9.75-2.062c12.12-5.391 17.56-19.58 12.19-31.69L181.9 174.3zM147.2 272L160 243.1L172.8 272H147.2zM576 63.1L320 64v384l256 0c35.34 0 64-28.66 64-64v-256C640 92.65 611.3 63.1 576 63.1zM552 232h-1.463c-8.082 27.78-21.06 49.29-35.06 66.34c7.854 4.943 13.33 7.324 13.46 7.375c12.22 5 18.19 18.94 13.28 31.19C538.4 346.3 529.5 352 519.1 352c-2.906 0-5.875-.5313-8.75-1.672c-1-.3906-14.33-5.951-31.26-18.19c-16.69 12.04-29.9 17.68-31.18 18.19C445.9 351.5 442.9 352 440 352c-9.562 0-18.59-5.766-22.34-15.2c-4.844-12.3 1.188-26.19 13.44-31.08c.748-.3047 6.037-2.723 13.25-7.189c-3.375-4.123-6.742-8.324-9.938-13.03c-7.469-10.97-4.594-25.89 6.344-33.34c11.03-7.453 25.91-4.594 33.34 6.375c1.883 2.77 3.881 5.186 5.854 7.682C487.3 256.8 494.1 245.5 499.5 232H408C394.8 232 384 221.3 384 208S394.8 184 408 184h48c0-13.25 10.75-24 24-24S504 170.8 504 184h48c13.25 0 24 10.75 24 24S565.3 232 552 232z"/>
                            <path class="fa-secondary"
                                  d="M0 127.1v256c0 35.34 28.66 64 64 64L320 448V64L64 63.1C28.66 63.1 0 92.65 0 127.1zM74.06 318.3l64-144c7.688-17.34 36.19-17.34 43.88 0l64 144c5.375 12.11-.0625 26.3-12.19 31.69C230.6 351.3 227.3 352 224 352c-9.188 0-17.97-5.312-21.94-14.25L193.1 319.6C193.3 319.7 192.7 320 192 320H128c-.707 0-1.305-.3418-1.996-.4023l-8.066 18.15c-5.406 12.14-19.69 17.55-31.69 12.19C74.13 344.5 68.69 330.4 74.06 318.3zM172.8 272H147.2L160 243.1L172.8 272z"/>
                        </svg>
                        <span class="group-hover:text-blue-500">{{ucfirst(['en' =>__('EN'),'de' =>__('DE')][session()->get('applocale') == 'de' ? 'en':'de' ])}}</span>
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
        {{__('All rights reserved')}} - &#128161; What To Do <span class="text-blue-500">API</span> - <a class="text-blue-500 hover:text-blue-600"
                                                                                                         href="{{route('about')}}">{{__('About & Imprint')}}</a>
    </p>
</footer>

@livewireScripts
@stack('scripts')
</body>
</html>
