<x-app-layout>
    <div class="bg-white lg:rounded-md p-3 shadow lg:shadow fixed left-0 right-0 lg:left-4 lg:right-auto lg:top-1/2 lg:-translate-y-1/2 left-4 block">
        <div class="space-x-6 lg:space-x-0 lg:space-y-1 text-sm flex flex-wrap lg:flex-col lg:flex-nowrap justify-center">
            <p class="font-medium border-b text-base pb-2 text-center hidden lg:block">Documentation</p>
            <a class="block hover:text-blue-500 font-medium" href="#general">&#x2022 General Information</a>
            <a class="block hover:text-blue-500 font-medium" href="#random">&#x2022 Random</a>
            <a class="block hover:text-blue-500 font-medium" href="#language">&#x2022 Language</a>
            <a class="block hover:text-blue-500 font-medium" href="#identifier">&#x2022 Identifier</a>
            <a class="block hover:text-blue-500 font-medium" href="#category">&#x2022 Category</a>
            <a class="block hover:text-blue-500 font-medium" href="#person">&#x2022 Person</a>
            <a class="block hover:text-blue-500 font-medium" href="#cost">&#x2022 Cost</a>
        </div>

    </div>
    <div id="general" class="py-24 w-full bg-blue-100 flex justify-center items-center">
        <p class="font-medium text-3xl text-center">{{__('Documentation')}}</p>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div class="md:grid md:grid-cols-4 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{__('General Information')}}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{__('This information will help you to understand the API.')}} <br>

                            &#x2022 {{__('Base url')}} <br>
                            &#x2022 {{__('Response attributes')}} <br>
                            &#x2022 {{__('Supported languages')}}<br>
                            &#x2022 {{__('Rate limiting')}} <br>
                        </p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-3 md:mt-0">
                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <p class="font-medium text-lg">{{__('General information')}}</p>
                        </div>
                        <div class="space-y-4 bg-white px-4 py-5 sm:p-6">
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Base url for your query requests')}}</p>
                                <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                    <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                        {{env('APP_URL')}}/api/v1
                                    </p>
                                    <button type="button" data-clipboard-text="{{env('APP_URL')}}/api/v1"
                                            class="clipboard h-full px-2 bg-gray-50 absolute top-0 right-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                            <path
                                                d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Response attributes')}}</p>
                                <table class="w-full border-collapse border border-gray-200">
                                    <thead class="bg-gray-50 text-left">
                                    <tr>
                                        <th class="py-2 px-3 border border-gray-200 text-base font-medium">{{__('Attribute')}}</th>
                                        <th class="py-2 px-3 border border-gray-200 text-base font-medium">{{__('Type')}}</th>
                                        <th class="py-2 px-3 border border-gray-200 text-base font-medium">{{__('Description')}}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td class="py-2 px-3 border border-gray-200 text-base">identifier</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">String</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">-</td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-3 border border-gray-200 text-base">task</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">Object/String</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">
                                            {{__('Default value is an object with the keys of the supported languages.')}} <br>
                                            {{__('Example:')}} <br>
                                            <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                                <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                                    { <br>
                                                    &nbsp;&nbsp;&nbsp;"en-US" : "{{__('Default text of the task')}}",<br>
                                                    &nbsp;&nbsp;&nbsp;"de" : ""<br>
                                                    &nbsp;&nbsp;&nbsp;"es" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"fr" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"it" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"ru" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"tr" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"uk" : ""<br>
                                                    }<br>
                                                </p>
                                                <button type="button" data-clipboard-text='   {
                                                "en-US" : "Default text of the task",
                                                "de" : ""
                                                "es" : "",
                                                "fr" : "",
                                                "it" : "",
                                                "ru" : "",
                                                "tr" : "",
                                                "uk" : ""
                                                }
                                                    ' class="clipboard  p-2 bg-gray-50 absolute top-0 right-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                                        <path
                                                            d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <br>
                                            {{__('The key "en-US" always has a value')}} <br>
                                            {{__('If the language query parameter was defined the task will have only the text of theis language')}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-3 border border-gray-200 text-base">category</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">String</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">
                                            <div>{{__('The supported categories are:')}}</div>
                                            <div class="mt-2">
                                                @foreach($supportedCategories as $category)
                                                    <span class="bg-gray-100 px-2 select-all">{{$category}}</span>
                                                @endforeach
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-3 border border-gray-200 text-base">person</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">Integer</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">
                                            {{__('Number of people needed for the task.')}} <br>
                                            {{__('Default:')}} <span class="bg-gray-100 px-2 select-all">1</span>, {{__('Min:')}} <span class="bg-gray-100 px-2 select-all">1</span>, {{__('Max:')}} <span
                                                class="bg-gray-100 px-2 select-all">10</span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-3 border border-gray-200 text-base">Cost</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">String</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">
                                            <div>{{__('The supported costs are:')}}</div>
                                            <div class="mt-2">
                                                @foreach(['free','$','$$','$$$'] as $cost)
                                                    <span class="bg-gray-100 px-2 select-all">{{$cost}}</span>
                                                @endforeach.
                                                    {{__('Default is')}} <span class="bg-gray-100 px-2 select-all">free</span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="py-2 px-3 border border-gray-200 text-base">links</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">Object/String</td>
                                        <td class="py-2 px-3 border border-gray-200 text-base">
                                            {{__('Default value is an object with the keys of the supported languages.')}} <br><br>
                                            {{__('Example:')}} <br>
                                            <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                                <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                                    { <br>
                                                    &nbsp;&nbsp;&nbsp;"en-US" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"de" : ""<br>
                                                    &nbsp;&nbsp;&nbsp;"es" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"fr" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"it" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"ru" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"tr" : "",<br>
                                                    &nbsp;&nbsp;&nbsp;"uk" : ""<br>
                                                    }<br>
                                                </p>
                                                <button type="button" data-clipboard-text='  {
                                                "en-US" : "",
                                                "de" : ""
                                                "es" : "",
                                                "fr" : "",
                                                "it" : "",
                                                "ru" : "",
                                                "tr" : "",
                                                "uk" : ""
                                                }
                                                    ' class="clipboard  p-2 bg-gray-50 absolute top-0 right-0">
                                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                                        <path
                                                            d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                                    </svg>
                                                </button>
                                            </div>
                                            <br>
                                            {{__('If the language query parameter was defined the task will have only the link of this language.')}}
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Supported languages:')}}</p>
                                <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                    <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                        "en-US" : "{{ucfirst('english')}}", <br>
                                        "de" : "{{ucfirst('german')}}", <br>
                                        "es" : "{{ucfirst('spanish')}}", <br>
                                        "fr" : "{{ucfirst('french')}}", <br>
                                        "it" : "{{ucfirst('italian')}}", <br>
                                        "ru" : "{{ucfirst('russian')}}", <br>
                                        "tr" : "{{ucfirst('turkish')}}", <br>
                                        "uk" : "{{ucfirst('ukrainian')}}" <br>
                                    </p>
                                    <button type="button" data-clipboard-text=' "en-US" : "English"
                                    "de" : "German",
                                    "es" : "Spanish",
                                    "fr" : "French",
                                    "it" : "Italian",
                                    "ru" : "Russian",
                                    "tr" : "Turkish",
                                    "uk" : "Ukrainian"
                                    ' class="clipboard  p-2 bg-gray-50 absolute top-0 right-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                            <path
                                                d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Rate limiting')}}</p>
                                <p>
                                    {{__('Please note that you can send a maximum of 120 query requests per minute to our API.')}}
                                    <br>
                                    {{__('If you exceed this maximum number, you will be blocked from using our API.')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="random" class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-4 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{__('Random')}}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{__('You can get a random task with a random parameters')}}</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-3 md:mt-0">

                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <p class="font-medium text-lg">{{__('Random')}}</p>

                        </div>
                        <div class="space-y-4 bg-white px-4 py-5 sm:p-6">
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Query end point')}}</p>
                                <div class="flex items-center">
                                    <label for="random" class="text-blue-500 font-medium text-lg mr-2">GET</label>
                                    <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                        <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                            /task
                                        </p>
                                        <button type="button" data-clipboard-text="/task"
                                                class="clipboard h-full px-2 bg-gray-50 absolute top-0 right-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                                <path
                                                    d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Response')}}</p>
                                <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                    <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                        { <br>
                                        &nbsp;&nbsp;&nbsp;"identifier" : "49f10d",<br>
                                        &nbsp;&nbsp;&nbsp;"task" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "Play a game of Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : "Spiele eine Partie Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "Juega al Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "Joue une partie de Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "Gioca una partita a Monopoli", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "Monopoly oyunu oynayın",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "Зіграти в гру Монополія"<br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        &nbsp;&nbsp;&nbsp;"category" : "social",<br>
                                        &nbsp;&nbsp;&nbsp;"person" : 4,<br>
                                        &nbsp;&nbsp;&nbsp;"cost" : "$",<br>
                                        &nbsp;&nbsp;&nbsp;"links" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "https://www.wikihow.com/Play-Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : "https://www.boardbattle.de/brettspiele/monopoly-classic/#monopoly-spielanleitung",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"ru" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "",<br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        }
                                    </p>
                                    <button type="button" data-clipboard-text='{
                                        "identifier" : "49f10d",
                                        "task" : {
                                        "en-US" : "Play a game of Monopoly",
                                        "de" : "Spiele eine Partie Monopoly",
                                        "es" : "Juega al Monopoly",
                                        "fr" : "Joue une partie de Monopoly",
                                        "it" : "Gioca una partita a Monopoli",
                                        "tr" : "Monopoly oyunu oynayın",
                                        "uk" : "Зіграти в гру Монополія"
                                        },
                                        "category" : "social",
                                        "person" : 4,
                                        "cost" : "$",
                                        "links" : {
                                        "en-US" : "https://www.wikihow.com/Play-Monopoly",
                                        "de" : "https://www.boardbattle.de/brettspiele/monopoly-classic/#monopoly-spielanleitung",
                                        "es" : "",
                                        "fr" : "",
                                        "it" : "",
                                        "ru" : "",
                                        "tr" : "",
                                        "uk" : "",
                                        },
                                        }'
                                            class="clipboard p-2 bg-gray-50 absolute top-0 right-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                            <path
                                                d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div id="language" class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-4 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{__('Language')}}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{__('You can get a random task in a specified language')}}</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-3 md:mt-0">

                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <p class="font-medium text-lg">{{__('Language')}}</p>

                        </div>
                        <div class="space-y-4 bg-white px-4 py-5 sm:p-6">
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Query end point')}}</p>
                                <div class="flex items-center">
                                    <label for="random" class="text-blue-500 font-medium text-lg mr-2">GET</label>
                                    <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                        <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                            /task?language=en-US
                                        </p>
                                        <button type="button" data-clipboard-text="/task?language=en-US"
                                                class="clipboard h-full px-2 bg-gray-50 absolute top-0 right-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                                <path
                                                    d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Response')}}</p>
                                <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                    <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                        { <br>
                                        &nbsp;&nbsp;&nbsp;"identifier" : "49f10d",<br>
                                        &nbsp;&nbsp;&nbsp;"task" : "Play a game of Monopoly"<br>
                                        &nbsp;&nbsp;&nbsp;"category" : "social",<br>
                                        &nbsp;&nbsp;&nbsp;"person" : 4,<br>
                                        &nbsp;&nbsp;&nbsp;"cost" : "$",<br>
                                        &nbsp;&nbsp;&nbsp;"links" : "https://www.wikihow.com/Play-Monopoly"<br>
                                        }
                                    </p>
                                    <button type="button" data-clipboard-text='{
                                    "identifier" : "49f10d",
                                    "task" : "Play a game of Monopoly",
                                    "category" : "social",
                                    "person" : 4,
                                    "cost" : "$",
                                    "links" : "https://www.wikihow.com/Play-Monopoly",
                                    }'
                                            class="clipboard p-2 bg-gray-50 absolute top-0 right-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                            <path
                                                d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div id="identifier" class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-4 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{__('Identifier')}}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{__('Get a specific task through the identifier')}}</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-3 md:mt-0">

                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <p class="font-medium text-lg">{{__('Identifier')}}</p>

                        </div>
                        <div class="space-y-4 bg-white px-4 py-5 sm:p-6">
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Query end point')}}</p>
                                <div class="flex items-center">
                                    <label for="random" class="text-blue-500 font-medium text-lg mr-2">GET</label>
                                    <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                        <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                            /task?identifier=89ref7
                                        </p>
                                        <button type="button" data-clipboard-text="/task?identifier=89ref7"
                                                class="clipboard h-full px-2 bg-gray-50 absolute top-0 right-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                                <path
                                                    d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Response')}}</p>
                                <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                    <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                        { <br>
                                        &nbsp;&nbsp;&nbsp;"identifier" : "89ref7",<br>
                                        &nbsp;&nbsp;&nbsp;"task" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "Play a game of Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : "Spiele eine Partie Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "Juega al Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "Joue une partie de Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "Gioca una partita a Monopoli", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "Monopoly oyunu oynayın",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "Зіграти в гру Монополія"<br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        &nbsp;&nbsp;&nbsp;"category" : "social",<br>
                                        &nbsp;&nbsp;&nbsp;"person" : 4,<br>
                                        &nbsp;&nbsp;&nbsp;"cost" : "$",<br>
                                        &nbsp;&nbsp;&nbsp;"links" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "https://www.wikihow.com/Play-Monopoly",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : "https://www.boardbattle.de/brettspiele/monopoly-classic/#monopoly-spielanleitung",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"ru" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "",<br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        }
                                    </p>
                                    <button type="button" data-clipboard-text=' {
                                        "identifier" : "89ref7",
                                        "task" : {
                                        "en-US" : "Play a game of Monopoly",
                                        "de" : "Spiele eine Partie Monopoly",
                                        "es" : "Juega al Monopoly",
                                        "fr" : "Joue une partie de Monopoly",
                                        "it" : "Gioca una partita a Monopoli",
                                        "tr" : "Monopoly oyunu oynayın",
                                        "uk" : "Зіграти в гру Монополія"
                                        },
                                        "category" : "social",
                                        "person" : 4,
                                        "cost" : "$",
                                        "links" : {
                                        "en-US" : "https://www.wikihow.com/Play-Monopoly",
                                        "de" : "https://www.boardbattle.de/brettspiele/monopoly-classic/#monopoly-spielanleitung",
                                        "es" : "",
                                        "fr" : "",
                                        "it" : "",
                                        "ru" : "",
                                        "tr" : "",
                                        "uk" : "",
                                        },
                                        }'
                                            class="clipboard p-2 bg-gray-50 absolute top-0 right-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                            <path
                                                d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
            <div id="category" class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-4 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{__('Category')}}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{__('Get a task which is in the specified category')}}</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-3 md:mt-0">

                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <p class="font-medium text-lg">{{__('Category')}}</p>

                        </div>
                        <div class="space-y-4 bg-white px-4 py-5 sm:p-6">
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Query end point')}}</p>
                                <div class="flex items-center">
                                    <label for="random" class="text-blue-500 font-medium text-lg mr-2">GET</label>
                                    <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                        <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                            /task?category=learn
                                        </p>
                                        <button type="button" data-clipboard-text="/task?category=learn"
                                                class="clipboard h-full px-2 bg-gray-50 absolute top-0 right-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                                <path
                                                    d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Response')}}</p>
                                <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                    <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                        { <br>
                                        &nbsp;&nbsp;&nbsp;"identifier" : "i85f65",<br>
                                        &nbsp;&nbsp;&nbsp;"task" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "Learn to sew on a button", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : "Lerne, einen Knopf anzunähen", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "Aprende a coser un botón", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "Apprends à coudre un bouton", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "Impara a cucire un bottone", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "Düğme dikmeyi öğrenin", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "Вчимося пришивати ґудзик" <br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        &nbsp;&nbsp;&nbsp;"category" : "learn",<br>
                                        &nbsp;&nbsp;&nbsp;"person" : 1,<br>
                                        &nbsp;&nbsp;&nbsp;"cost" : "$",<br>
                                        &nbsp;&nbsp;&nbsp;"links" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : ""<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"ru" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "",<br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        }
                                    </p>
                                    <button type="button" data-clipboard-text='{
                                        "identifier" : "i85f65",
                                        "task" : {
                                        "en-US" : "Learn to sew on a button",
                                        "de" : "Lerne, einen Knopf anzunähen",
                                        "es" : "Aprende a coser un botón",
                                        "fr" : "Apprends à coudre un bouton",
                                        "it" : "Impara a cucire un bottone",
                                        "tr" : "Düğme dikmeyi öğrenin",
                                        "uk" : "Вчимося пришивати ґудзик"
                                        },
                                        "category" : "learn",
                                        "person" : 1,
                                        "cost" : "$",
                                        "links" : {
                                        "en-US" : "",
                                        "de" : ""
                                        "es" : "",
                                        "fr" : "",
                                        "it" : "",
                                        "ru" : "",
                                        "tr" : "",
                                        "uk" : "",
                                        },
                                        }'
                                            class="clipboard p-2 bg-gray-50 absolute top-0 right-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                            <path
                                                d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="person" class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-4 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{__('Person')}}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{__('Get a task which is in the specified people count')}}</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-3 md:mt-0">

                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <p class="font-medium text-lg">{{__('Person')}}</p>

                        </div>
                        <div class="space-y-4 bg-white px-4 py-5 sm:p-6">
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Query end point')}}</p>
                                <div class="flex items-center">
                                    <label for="random" class="text-blue-500 font-medium text-lg mr-2">GET</label>
                                    <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                        <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                            /task?person=2
                                        </p>
                                        <button type="button" data-clipboard-text="/task?person=2"
                                                class="clipboard h-full px-2 bg-gray-50 absolute top-0 right-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                                <path
                                                    d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Response')}}</p>
                                <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                    <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                        { <br>
                                        &nbsp;&nbsp;&nbsp;"identifier" : "42168d",<br>
                                        &nbsp;&nbsp;&nbsp;"task" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "Compliment someone", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : "Jemandem ein Kompliment machen", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "Elogia a alguien", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "Complimente quelqu'un", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "Fai i complimenti a qualcuno", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "Birine iltifat edin", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "Зробіть комусь комплімент"
                                        <br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        &nbsp;&nbsp;&nbsp;"category" : "social",<br>
                                        &nbsp;&nbsp;&nbsp;"person" : 2,<br>
                                        &nbsp;&nbsp;&nbsp;"cost" : "free",<br>
                                        &nbsp;&nbsp;&nbsp;"links" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : ""<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"ru" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "",<br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        }
                                    </p>
                                    <button type="button" data-clipboard-text='  {
                                            "identifier" : "42168d",
                                            "task" : {
                                            "en-US" : "Compliment someone",
                                            "de" : "Jemandem ein Kompliment machen",
                                            "es" : "Elogia a alguien",
                                            "fr" : "Complimente quelquun",
                                            "it" : "Fai i complimenti a qualcuno",
                                            "tr" : "Birine iltifat edin",
                                            "uk" : "Зробіть комусь комплімент"
                                            },
                                            "category" : "social",
                                            "person" : 2,
                                            "cost" : "free",
                                            "links" : {
                                            "en-US" : "",
                                            "de" : ""
                                            "es" : "",
                                            "fr" : "",
                                            "it" : "",
                                            "ru" : "",
                                            "tr" : "",
                                            "uk" : "",
                                            },
                                            }'
                                            class="clipboard p-2 bg-gray-50 absolute top-0 right-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                            <path
                                                d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div id="cost" class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
                </div>
            </div>
            <div class="md:grid md:grid-cols-4 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">{{__('Cost')}}</h3>
                        <p class="mt-1 text-sm text-gray-600">{{__('Get a task which is in the specified cost')}}</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-3 md:mt-0">

                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <p class="font-medium text-lg">{{__('Cost')}}</p>

                        </div>
                        <div class="space-y-4 bg-white px-4 py-5 sm:p-6">
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Query end point')}}</p>
                                <div class="flex items-center">
                                    <label for="random" class="text-blue-500 font-medium text-lg mr-2">GET</label>
                                    <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                        <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                            /task?cost=$$$
                                        </p>
                                        <button type="button" data-clipboard-text="/task?cost=$$$"
                                                class="clipboard h-full px-2 bg-gray-50 absolute top-0 right-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                                <path
                                                    d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="space-y-2">
                                <p class="text-sm">{{__('Response')}}</p>
                                <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                    <p class="grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                        { <br>
                                        &nbsp;&nbsp;&nbsp;"identifier" : "4c8048",<br>
                                        &nbsp;&nbsp;&nbsp;"task" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "Go see a Broadway production", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : "Sieh dir eine Broadway-Produktion an", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "Ve a ver una producció de Broadway", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "Va voir une production de Broadway", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "Vai a vedere una produzione di Broadway", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "Bir Broadway prodüksiyonu izlemeye gidin", <br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "Відвідати бродвейську виставу" <br>

                                        &nbsp;&nbsp;&nbsp;},<br>
                                        &nbsp;&nbsp;&nbsp;"category" : "fun",<br>
                                        &nbsp;&nbsp;&nbsp;"person" : 4,<br>
                                        &nbsp;&nbsp;&nbsp;"cost" : "$$$",<br>
                                        &nbsp;&nbsp;&nbsp;"links" : {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de" : ""<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"es" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"fr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"it" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"ru" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"tr" : "",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"uk" : "",<br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        }
                                    </p>
                                    <button type="button" data-clipboard-text='{
                                        "identifier" : "4c8048",
                                        "task" : {
                                        "en-US" : "Go see a Broadway production",
                                        "de" : "Sieh dir eine Broadway-Produktion an",
                                        "es" : "Ve a ver una producció de Broadway",
                                        "fr" : "Va voir une production de Broadway",
                                        "it" : "Vai a vedere una produzione di Broadway",
                                        "tr" : "Bir Broadway prodüksiyonu izlemeye gidin",
                                        "uk" : "Відвідати бродвейську виставу"
                                        },
                                        "category" : "fun",
                                        "person" : 4,
                                        "cost" : "$$$",
                                        "links" : {
                                        "en-US" : "",
                                        "de" : ""
                                        "es" : "",
                                        "fr" : "",
                                        "it" : "",
                                        "ru" : "",
                                        "tr" : "",
                                        "uk" : "",
                                        },
                                        }'
                                            class="clipboard p-2 bg-gray-50 absolute top-0 right-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="h-5 w-5 fill-transparent group-hover:fill-gray-500 transition-all">
                                            <path
                                                d="M502.6 70.63l-61.25-61.25C435.4 3.371 427.2 0 418.7 0H255.1c-35.35 0-64 28.66-64 64l.0195 256C192 355.4 220.7 384 256 384h192c35.2 0 64-28.8 64-64V93.25C512 84.77 508.6 76.63 502.6 70.63zM464 320c0 8.836-7.164 16-16 16H255.1c-8.838 0-16-7.164-16-16L239.1 64.13c0-8.836 7.164-16 16-16h128L384 96c0 17.67 14.33 32 32 32h47.1V320zM272 448c0 8.836-7.164 16-16 16H63.1c-8.838 0-16-7.164-16-16L47.98 192.1c0-8.836 7.164-16 16-16H160V128H63.99c-35.35 0-64 28.65-64 64l.0098 256C.002 483.3 28.66 512 64 512h192c35.2 0 64-28.8 64-64v-32h-47.1L272 448z"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.8/clipboard.min.js"></script>
        <script>
            new ClipboardJS('.clipboard');
        </script>
    @endpush
</x-app-layout>


