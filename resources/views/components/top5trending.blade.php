<!-- Trending -->
        <div class="md:w-2/5 w-full space-y-4 p-2">
            @forelse($trendingMusic as $data)
           
            <a href="#" class="lg:flex xl:flex md:flex flex items-center bg-white border rounded-lg shadow-md md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700">
                <div class="w-24">
                <img
                    class="h-8 w-8 ml-4 mt-2 mb-2"
                    src="images/logo.png"
                    alt=""
                  />
              </div>
                <div class="w-48 grid-cols-1">
                    <h5 class="mb-0 text-sm font-bold tracking-tight text-gray-900 dark:text-white">{{ Str::limit($data->artist , 11) }}</h5>
                    <p class="mb-2 text-xs font-semibold text-gray-700 dark:text-gray-400">{{ Str::limit($data->title , 30) }} </p>
                </div>
                <div class="w-28 flex flex-col-3 col-end-3 gap-2">
                    <div>
                    <svg data-tooltip-target="tooltip-default" class="w-6 h-6 hover:bg-pink-500 hover:rounded hover:text-white hover:w-10 hover:h-10  hover:p-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
                    <div id="tooltip-default" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                            Share Song
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div>
                        <svg data-tooltip-target="tooltip-default2" class="w-6 h-6 hover:bg-pink-500 hover:rounded hover:text-white hover:w-10 hover:h-10  hover:p-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"></path></svg>
                        <div id="tooltip-default2" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                            View Artist Collections
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                    <div>
                        <svg data-tooltip-target="tooltip-default3" class="w-6 h-6 hover:bg-pink-500 hover:rounded hover:text-white hover:w-10 hover:h-10  hover:p-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                        <div id="tooltip-default3" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
                            Download MP3
                            <div class="tooltip-arrow" data-popper-arrow></div>
                        </div>
                    </div>
                </div>
            </a>

            @empty
                    <div>
                        <h3 class="text-red-400 font-extrabold">No Trending Available</h3>

                    </div>
           @endforelse

        </div>