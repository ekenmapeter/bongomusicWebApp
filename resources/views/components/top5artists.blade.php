<ul class="max-w-md divide-y divide-gray-200 dark:divide-gray-700">
    @forelse($topArtist as $data)
   <li>
      <div class="flex items-center space-x-4">
         <div class="flex-shrink-0">
            <img class="w-8 h-8 rounded-full" src="https://picsum.photos/56.webp?random=10" alt="Neil image">
         </div>
         <div class="flex-1 min-w-0">
            <p class="text-sm font-medium text-gray-900 truncate dark:text-white">
               {{ Str::limit($data->artist_name , 15) }}
            </p>
            <p class="text-sm text-gray-500 truncate dark:text-gray-400">
               10 Tracks available
            </p>
         </div>
         <div>
            <svg data-tooltip-target="tooltip-artist" class="w-6 h-6 hover:bg-pink-500 hover:rounded hover:text-white hover:w-10 hover:h-10 hover:p-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8.684 13.342C8.886 12.938 9 12.482 9 12c0-.482-.114-.938-.316-1.342m0 2.684a3 3 0 110-2.684m0 2.684l6.632 3.316m-6.632-6l6.632-3.316m0 0a3 3 0 105.367-2.684 3 3 0 00-5.367 2.684zm0 9.316a3 3 0 105.368 2.684 3 3 0 00-5.368-2.684z"></path></svg>
            <div id="tooltip-artist" role="tooltip" class="inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-900 rounded-lg shadow-sm opacity-0 transition-opacity duration-300 tooltip dark:bg-gray-700">
               Share Artist
                  <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
         </div>
         <div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
            <button class="relative inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                  View Playlist
              </span>
            </button>
         </div>
      </div>
   </li>
   @empty
                    <div>
                        <h3 class="text-red-400 font-extrabold">No Artist Available</h3>

                    </div>
           @endforelse
   
</ul>
<div class="inline-flex items-center text-base font-semibold text-gray-900 dark:text-white">
            <button class="relative mt-6  inline-flex items-center justify-center p-0.5 mb-2 mr-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">
              <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                  Explore More
              </span>
            </button>
         </div>