<div class="container mx-auto py-8 w-1/2">
    <div class="bg-white px-4 py-12 rounded-md shadow flex flex-col items-center space-y-12">
        <div>
            <p class="text-center text-xl">What to do?</p>
            <p class="text-center text-xl"> &#128161; Oh... Let's find you something to do</p>
        </div>
        <div class="space-y-4">
            <div>
                <p class="font-medium">Expensive</p>

                <div class="flex items-center space-x-2">
                    @foreach($costs as $cost)
                        <div class="flex flex-col  justify-between bg-blue-500 rounded relative transition-all duration-300">
                            <input wire:model="selectedCosts" type="checkbox" id="{{$cost}}" value="{{$cost}}" class="appearance-none peer"/>
                            <label for="{{$cost}}"
                                   class="p-1 rounded flex flex-row justify-center px-4 select-none text-white transition-all duration-100 peer-checked:text-yellow-300">{{ucwords($cost)}}</label>
                            <div class="absolute w-full h-full  rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="font-medium">For how many people</p>

                <div class="flex items-center space-x-2">
                    @foreach($persons as $person)
                        <div class="flex flex-col  justify-between bg-blue-500 rounded relative transition-all duration-300">
                            <input type="checkbox" id="{{$person}}" value="{{$person}}" class="appearance-none peer"/>
                            <label for="{{$person}}"
                                   class="p-1 rounded flex flex-row justify-center px-4 select-none text-white transition-all duration-100 peer-checked:text-yellow-300">{{$person}}</label>
                            <div class="absolute w-full h-full  rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div>
                <p class="font-medium"> Select a category</p>
                <div class="flex items-center space-x-2">
                    @foreach($categories as $category)
                        <div class="flex flex-col  justify-between bg-blue-500 rounded relative transition-all duration-300">
                            <input type="checkbox" id="{{$category}}" value="{{$category}}" class="appearance-none peer"/>
                            <label for="{{$category}}"
                                   class="p-1 rounded flex flex-row justify-center px-2 select-none text-white transition-all duration-100 peer-checked:text-yellow-500">{{ucwords($category)}}</label>
                            <div class="absolute w-full h-full  rounded peer-checked:shadow-[-4px_4px_0px_rgb(252,211,77)] pointer-events-none transition-all duration-300"></div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="flex justify-center pt-8">
                <button class="bg-yellow-500 hover:bg-yellow-600 rounded text-white px-12 py-1 font-medium " wire:click="getTask">Get me a Task</button>

            </div>
        </div>
        <div class="flex flex-col justify-center items-center w-full">
            <div class="bg-gray-100 py-3 px-5 rounded space-y-2 md:w-2/3 border-2">
                <p><span class="font-medium">Task:</span> {{$task->task}}</p>
                <p><span class="font-medium">For how many people:</span> {{$task->person}}</p>
                <p><span class="font-medium">Category:</span> {{$task->category}}</p>
                <p><span class="font-medium">Cost:</span> {{$task->cost}}</p>
            </div>
        </div>
    </div>
</div>
