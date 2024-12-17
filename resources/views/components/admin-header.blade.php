           <header class="flex items-center justify-between px-6 py-4 bg-white border-b border-gray-200">
            <div class="flex items-center">
                <!-- <input class="w-64 px-4 py-2 text-gray-600 bg-gray-100 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-indigo-500" type="text" placeholder="Search..."> -->
            </div>
            <div class="flex items-center">
           <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 20 20"><path fill="currentColor" d="M5 5a5 5 0 0 1 10 0v2A5 5 0 0 1 5 7zM0 16.68A19.9 19.9 0 0 1 10 14c3.64 0 7.06.97 10 2.68V20H0z"/></svg>
                <div class="ml-4 text-gray-800 text-bold ">{{ Auth::user()->name }}</div>
            </div>
        </header>