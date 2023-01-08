<x-app-layout>

    <div class="py-24 w-full bg-blue-100 flex justify-center items-center ">
        <p class="font-medium text-3xl text-center">Documentation </p>
    </div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-4 lg:px-6">
            <div class="md:grid md:grid-cols-3 md:gap-6">
                <div class="md:col-span-1">
                    <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">Profile</h3>
                        <p class="mt-1 text-sm text-gray-600">This information will be displayed publicly so be careful what you share.</p>
                    </div>
                </div>
                <div class="mt-5 md:col-span-2 md:mt-0">

                    <div class="shadow sm:overflow-hidden sm:rounded-md">
                        <div class="bg-gray-50 px-4 py-3 sm:px-6">
                            <p class="font-medium text-lg ">Random</p>

                        </div>
                        <div class="space-y-4 bg-white px-4 py-5 sm:p-6">
                            <p>Get a random task from the api</p>
                            <div class="space-y-2">
                                <p class="text-sm">Query</p>
                                <div class="flex items-center">
                                    <label for="random" class="text-blue-500 font-medium text-lg mr-2">GET</label>
                                    <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                        <p class="select-all grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                            https://what-to-do-api.de/api/v1/task
                                        </p>
                                        <button type="button" data-clipboard-text="https://what-to-do-api.de/api/v1/task"
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
                                <p class="text-sm">response</p>
                                <div class="w-full bg-gray-50 border border-gray-200 relative group">
                                    <p class="select-all grow bg-gray-50 text-gray-700 border-gray-200 flex items-center cursor-text py-1 pl-2">
                                        { <br>
                                        &nbsp;&nbsp;&nbsp;"identifier": "49f10d",<br>
                                        &nbsp;&nbsp;&nbsp;"task": {<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"en-US": "Start a webinar on a topic of your choice",<br>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"de": "Starte ein Webinar zu einem Thema deiner Wahl"<br>
                                        &nbsp;&nbsp;&nbsp;},<br>
                                        &nbsp;&nbsp;&nbsp;"category": "learn",<br>
                                        &nbsp;&nbsp;&nbsp;"person": 1,<br>
                                        &nbsp;&nbsp;&nbsp;"cost": "free",<br>
                                        &nbsp;&nbsp;&nbsp;"links": null<br>
                                        }
                                    </p>
                                    <button type="button" data-clipboard-text='{
                                    "identifier": "49f10d",
                                    "task": {
                                    "en-US": "Start a webinar on a topic of your choice",
                                    "de": "Starte ein Webinar zu einem Thema deiner Wahl"
                                    },
                                    "category": "learn",
                                    "person": 1,
                                    "cost": "free",
                                    "links": null
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
            <div class="hidden sm:block" aria-hidden="true">
                <div class="py-5">
                    <div class="border-t border-gray-200"></div>
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


