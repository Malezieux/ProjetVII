<nav class="bg-gray-800">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8 bg-gr">
        <div class="relative flex items-center justify-between h-16">
            <div class="flex items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex-shrink-0-right pl-25">
                    <a href="{{ path('app_user') }}" class="text-white font-bold text-xl ">
                       <img class="mr-20" src="{{asset('gefor.png')}}">
                    </a>
                </div>
                <div class="flex-shrink-5-right pl-25 p-25">
                    <a href="{{ path('app_user') }}" class="text-white font-bold text-xl ">
                       MyWebsite
                    </a>
                </div>
                <div class="hidden sm:block sm:ml-6 pl-50">
                    <div class="flex space-x-4">
                        <a href="{{ path('app_user') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Users</a>
                        <a href="{{ path('app_user') }}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>