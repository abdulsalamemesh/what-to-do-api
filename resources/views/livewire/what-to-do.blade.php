<div class="container mx-auto py-8 md:py-12 lg:w-8/12 xl:w-1/2">
    <div class="bg-white px-4 py-8 md:py-12 md:rounded shadow flex flex-col items-center space-y-4 md:space-y-12">
        <div class="font-semibold text-center text-xl md:text-2xl">
            <p>{{__('What to do?')}}</p>
            <p> &#128161; {{__('Oh... Let\'s find you something to do!')}}</p>
            <div class="flex justify-center md:pt-8 col-span-2">
                <button class="bg-yellow-500 hover:shadow-[-4px_4px_0px_rgb(59,130,246)] rounded text-white px-6 md:px-12 py-2 font-medium"
                        wire:loading.class="focus:border-yellow-500 !bg-yellow-500"
                        wire:click="getTask">
                    {{__('Get me a Task')}}
                </button>
            </div>
        </div>
        <div class="flex flex-col justify-center items-center w-full">
            <div class="bg-gray-100 py-3 px-5 rounded space-y-2 w-full md:w-2/3 border-4" wire:target="getTask" wire:loading.class="border-blue-500 bg-blue-50">
                @if($task)
                    <p>
                        <span class="font-medium">{{__('Task')}}:</span>
                        @if(count($selectedLanguages) == 1)
                            {{$task->task[reset($selectedLanguages)]}}
                        @elseif(count($selectedLanguages) == 0)
                            <br>
                            @forelse($task->task as $language => $text)
                                <span class="font-medium text-gray-700">{{__(ucfirst($languages[$language]))}}:</span>
                                {{$text}}
                                <br>
                            @empty
                            @endforelse
                        @else
                            <br>
                            @forelse($selectedLanguages as $language)
                                <span class="font-medium text-gray-700">{{__(ucfirst($languages[$language]))}}:</span>
                                {{$task->task[$language]}}
                                <br>
                            @empty
                            @endforelse
                        @endif
                    </p>
                    <p><span class="font-medium">{{__('People')}}:</span> {{$task->person}}</p>
                    <p><span class="font-medium">{{__('Category')}}:</span> {{$task->category}}</p>
                    <p><span class="font-medium">{{__('Cost')}}:</span> {{$task->cost}}</p>
                    <p>
                        <span class="font-medium">{{__('Resources')}}:</span>
                        @if(count($selectedLanguages) == 1)
                            <a class="text-blue-500 hover:text-blue-600" href="{{$task->links[reset($selectedLanguages)]}}" target="_blank">  {{$task->links[reset($selectedLanguages)]}}</a>
                        @elseif(count($selectedLanguages) == 0)
                            <br>
                            @forelse($task->links as $language => $link)
                                <span class="font-medium text-gray-700">{{__(ucfirst($languages[$language]))}}:</span>
                                <a class="text-blue-500 hover:text-blue-600" href="{{$link}}" target="_blank">{{$link}}</a>
                                <br>
                            @empty
                            @endforelse
                        @else
                            <br>
                            @forelse($selectedLanguages as $language)
                                <span class="font-medium text-gray-700">{{__(ucfirst($languages[$language]))}}:</span>
                                <a class="text-blue-500 hover:text-blue-600" href="{{$task->links[$language]}}" target="_blank">{{$task->links[$language]}}</a>
                                <br>
                            @empty
                            @endforelse
                        @endif
                    </p>
                @else
                    <p class="font-medium">{{__('Oh... we couldn\'t find anything this time. Try other filters')}}</p>
                @endif
            </div>
        </div>

        <div class="space-y-4 w-full max-w-xl">
            <div>
                <p class="font-medium">{{__('Language')}}</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-1.5 mt-1">
                    @foreach($languages as $key => $language)
                        <div
                            class="flex flex-col justify-between bg-blue-500 hover:bg-blue-600 hover:shadow-[-4px_4px_0px_rgb(252,211,77)] transition-all duration-150 rounded relative">
                            <input wire:model="selectedLanguages" type="checkbox" id="{{$key}}" value="{{$key}}" class="appearance-none peer"/>
                            <label for="{{$key}}"
                                   class="cursor-pointer p-1 rounded flex flex-row justify-center px-3 select-none text-white transition-all duration-150 peer-checked:text-yellow-300">{{__(ucwords($language))}}</label>
                            <div class="absolute w-full h-full rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="font-medium">{{__('Category')}}</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-1.5 mt-1">
                    @foreach($categories as $category)
                        <div
                            class="flex flex-col justify-between bg-blue-500 hover:bg-blue-600 hover:shadow-[-4px_4px_0px_rgb(252,211,77)] transition-all duration-150 rounded relative">
                            <input wire:model="selectedCategories" type="checkbox" id="{{$category}}" value="{{$category}}" class="appearance-none peer"/>
                            <label for="{{$category}}"
                                   class="cursor-pointer p-1 rounded flex flex-row justify-center px-3 select-none text-white transition-all duration-150 peer-checked:text-yellow-300">{{ucwords($category)}}</label>
                            <div class="absolute w-full h-full rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="font-medium">{{__('Cost')}}</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-1.5 mt-1">
                    @foreach($costs as $cost)
                        <div
                            class="flex flex-col justify-between bg-blue-500 hover:bg-blue-600 hover:shadow-[-4px_4px_0px_rgb(252,211,77)] transition-all duration-150 rounded relative">
                            <input wire:model="selectedCosts" type="checkbox" id="{{$cost}}" value="{{$cost}}" class="appearance-none peer"/>
                            <label for="{{$cost}}"
                                   class="cursor-pointer p-1 rounded flex flex-row justify-center px-3 select-none text-white transition-all duration-150 peer-checked:text-yellow-300">{{ucwords($cost)}}</label>
                            <div class="absolute w-full h-full rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="font-medium">{{__('For how many people')}}</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-1.5 mt-1">
                    @foreach($persons as $person)
                        <div
                            class="flex flex-col justify-between bg-blue-500 hover:bg-blue-600 hover:shadow-[-4px_4px_0px_rgb(252,211,77)] transition-all duration-150 rounded relative">
                            <input wire:model="selectedPersons" type="checkbox" id="{{$person}}" value="{{$person}}" class="appearance-none peer"/>
                            <label for="{{$person}}"
                                   class="cursor-pointer p-1 rounded flex flex-row justify-center px-3 select-none text-white transition-all duration-150 peer-checked:text-yellow-300">{{$person}}</label>
                            <div class="absolute w-full h-full rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
