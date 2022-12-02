<div class="container mx-auto py-8 md:py-12 lg:w-8/12 xl:w-1/2">
    <form wire:submit.prevent="submit"
          class="bg-white px-4 py-8 md:py-12 md:rounded shadow flex flex-col items-center space-y-6 ">
        <div class="font-semibold text-center text-xl md:text-2xl">
            <p>{{__('Do you have a task in mind, but you can not find it?')}}</p>
            <p>{{__('You\'re welcome to add it to the API.')}}</p>
        </div>
        <div class="space-y-4 w-full max-w-xl ">
            <div class="border-b-2 pb-6 border-gray-200">
                <p class="font-medium">{{__('Language')}}</p>
                <p class="text-xs mb-2">{{__('Select the language, in which you would like to write your task.')}}
                    <br> {{__('The Api will translate it to all supported languages.')}}</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-1.5">
                    @foreach($languages as $key => $language)
                        <div wire:key="{{$key}}-text-language"
                             class="flex flex-col justify-between bg-blue-500 hover:bg-blue-600 hover:shadow-[-4px_4px_0px_rgb(252,211,77)] transition-all duration-150 rounded relative">
                            <input wire:model="textLanguage" type="radio" id="{{$key}}" value="{{$key}}" class="appearance-none peer"/>
                            <label for="{{$key}}"
                                   class="cursor-pointer p-1 rounded flex flex-row justify-center px-3 select-none text-white transition-all duration-150 peer-checked:text-yellow-300">{{ucwords($language)}}</label>
                            <div class="absolute w-full h-full rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
                @error('textLanguage') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="border-b-2 pb-6 border-gray-200">
                <label for="task" class="font-medium">{{__('Task')}}</label>
                <p class="text-xs mb-2 @if($overCharsCount) text-red-500 @endif">
                    @if($overCharsCount)
                        {{__('You are')}} {{$charsCount}} {{__('characters over the limit')}}
                    @else
                        {{$charsCount}} {{__('remaining characters.')}}
                    @endif
                </p>
                <textarea wire:model="task" id="task" rows="3" class="block w-full px-3 py-1.5 border-2 rounded border-blue-500 focus:outline-yellow-400"></textarea>
                @error('task') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>

            <div class="border-b-2 pb-6 border-gray-200">
                <p class="font-medium">{{__('Category')}}</p>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-1.5 mt-1">
                    @foreach($categories as $category)
                        <div wire:key="{{$category}}"
                             class="flex flex-col justify-between bg-blue-500 hover:bg-blue-600 hover:shadow-[-4px_4px_0px_rgb(252,211,77)] transition-all duration-150 rounded relative">
                            <input wire:model="selectedCategory" type="radio" id="{{$category}}" value="{{$category}}" class="appearance-none peer"/>
                            <label for="{{$category}}"
                                   class="cursor-pointer p-1 rounded flex flex-row justify-center px-3 select-none text-white transition-all duration-150 peer-checked:text-yellow-300">{{ucwords($category)}}</label>
                            <div class="absolute w-full h-full rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
                @error('selectedCategory') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="border-b-2 pb-6 border-gray-200">
                <p class="font-medium">{{__('Cost')}}</p>
                <div class="grid grid-cols-4 gap-1.5 mt-1">
                    @foreach($costs as $cost)
                        <div wire:key="{{$cost}}"
                             class="flex flex-col justify-between bg-blue-500 hover:bg-blue-600 hover:shadow-[-4px_4px_0px_rgb(252,211,77)] transition-all duration-150 rounded relative">
                            <input wire:model="selectedCost" type="radio" id="{{$cost}}" value="{{$cost}}" class="appearance-none peer"/>
                            <label for="{{$cost}}"
                                   class="cursor-pointer p-1 rounded flex flex-row justify-center px-3 select-none text-white transition-all duration-150 peer-checked:text-yellow-300">{{ucwords($cost)}}</label>
                            <div class="absolute w-full h-full rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
                @error('selectedCost') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="border-b-2 pb-6 border-gray-200">
                <p class="font-medium">{{__('For how many people')}}</p>
                <div class="grid grid-cols-5 gap-1.5 mt-1">
                    @foreach(range(1,10) as $number)
                        <div wire:key="{{$number}}-person"
                             class="flex flex-col justify-between bg-blue-500 hover:bg-blue-600 hover:shadow-[-4px_4px_0px_rgb(252,211,77)] transition-all duration-150 rounded relative">
                            <input wire:model="selectedPerson" type="radio" id="{{$number}}" value="{{$number}}" class="appearance-none peer"/>
                            <label for="{{$number}}"
                                   class="cursor-pointer p-1 rounded flex flex-row justify-center px-3 select-none text-white transition-all duration-150 peer-checked:text-yellow-300">{{$number}}</label>
                            <div class="absolute w-full h-full rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
                @error('selectedPerson') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
            </div>
            <div class="border-b-2 pb-6 border-gray-200">
                <p class="font-medium">{{__('Resources')}}</p>
                <p class="text-xs mb-2">{{__('If you like you can add a resource to your task.')}} <br>{{__('Select the language, for which you would like to add a link or url.')}}
                    <br> {{__('Example:')}} https://www.google.com
                </p>

                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-5 gap-1.5">
                    @foreach($languages as $key => $language)
                        <div wire:key="{{$key}}-selectedResourceLanguage"
                             class="flex flex-col justify-between bg-blue-500 hover:bg-blue-600 hover:shadow-[-4px_4px_0px_rgb(252,211,77)] transition-all duration-150 rounded relative">
                            <input wire:model="selectedResourceLanguages" type="checkbox" id="recourse-{{$key}}" value="{{$key}}"
                                   class="appearance-none peer"/>
                            <label for="recourse-{{$key}}"
                                   class="cursor-pointer p-1 rounded flex flex-row justify-center px-3 select-none text-white transition-all duration-150 peer-checked:text-yellow-300">{{ucwords($language)}}</label>
                            <div class="absolute w-full h-full rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
                @error('selectedResourceLanguages') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror

                @foreach($selectedResourceLanguages as $input)
                    <div class="grid gap-1.5 mt-4" wire:key="{{$input}}-resource">
                        <div class="flex items-center w-full">
                            <label for="input-{{$input}}"
                                   class="px-3 cursor-pointer text-white bg-blue-500 h-8 rounded-l flex justify-center items-center">
                                <span>{{ucwords($languages[$input])}}</span>
                            </label>
                            <input type="text" id="input-{{$input}}" wire:model="resources.{{$input}}"
                                   class="w-full h-8 px-2 rounded-r border-r-2 border-t-2 border-b-2 border-blue-500 focus:outline-yellow-400"/>
                        </div>
                    </div>
                    @error('resources.'.$input) <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                @endforeach
            </div>


        </div>
        <div class="text-center">
            <button type="submit" class="bg-yellow-500 hover:shadow-[-4px_4px_0px_rgb(59,130,246)] rounded text-white px-6 md:px-12 py-2 font-medium transition-all duration-150">
                {{__('Submit your task')}}
            </button>
        </div>
    </form>
</div>
