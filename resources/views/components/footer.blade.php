<nav x-data="{ menuOpen: false }" class="fixed bottom-0 inset-x-0">
   <div x-on:click="menuOpen = !menuOpen" class="flex bg-white p-2 items-center justify-center">
    <svg style="color: blue" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-music-note-list font-bold" viewBox="0 0 16 16"> <path d="M12 13c0 1.105-1.12 2-2.5 2S7 14.105 7 13s1.12-2 2.5-2 2.5.895 2.5 2z" fill="blue"></path> <path fill-rule="evenodd" d="M12 3v10h-1V3h1z" fill="blue"></path> <path d="M11 2.82a1 1 0 0 1 .804-.98l3-.6A1 1 0 0 1 16 2.22V4l-5 1V2.82z" fill="blue"></path> <path fill-rule="evenodd" d="M0 11.5a.5.5 0 0 1 .5-.5H4a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 7H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5zm0-4A.5.5 0 0 1 .5 3H8a.5.5 0 0 1 0 1H.5a.5.5 0 0 1-.5-.5z" fill="blue"></path> </svg>

    <h5 class="text-transparent bg-clip-text bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-700 self-center md:text-xl text-sm font-semibold whitespace-nowrap dark:text-white">Music Player</h5>
  </div>

  <div  x-show="menuOpen" class="">
    <footer id="footer" class="bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-700 w-full col-span-6 p-2 grid md:grid-cols-3 grid-cols-1 gap-2">
        <div class="flex items-center">
          <img
            class="h-14 w-14 mr-4 flex-shrink-0"
            src="https://picsum.photos/56.webp?random=10"
            alt=""
          />
          <div class="mr-4">
            <div class="text-sm text-white text-line-clamp-1 font-light">
              Heaven
            </div>
            <div class="text-xs text-gray-100 text-line-clamp-1">
              <span>Ludwig van Beethoven</span>
            </div>
          </div>
        </div>
        <div>
          <div class="flex items-center justify-center mb-3">
            <button class="w-5 h-5 text-gray-100 mr-6">
              <svg
                class="fill-current w-3"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z"
                />
              </svg>
            </button>
            <button class="w-5 h-5 text-gray-100 mr-6">
              <svg
                class="fill-current"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z" />
              </svg>
            </button>
            <button
              class="w-8 h-8 border border-gray-300 rounded-full flex text-gray-100 mr-6"
            >
              <svg
                class="fill-current h-5 w-5 m-auto"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z" />
              </svg>
            </button>
            <button class="w-5 h-5 text-gray-100 mr-6">
              <svg
                class="fill-current"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z" />
              </svg>
            </button>
            <button class="w-5 h-5 text-gray-100">
              <svg
                class="fill-current w-4"
                xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 20 20"
              >
                <path
                  d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z"
                />
              </svg>
            </button>
          </div>
          <div class="flex items-center">
            <span class="text-xs text-gray-100 font-light">4:18</span>
            <div class="overflow-hidden relative flex-1 mx-2 rounded">
              <div class="border-b-4 border-gray-400 rounded"></div>
              <div
                class="absolute inset-x-0 top-0 -translate-x-48 border-b-4 border-gray-100 rounded transform hover:border-green-200"
              ></div>
            </div>
            <span class="text-xs text-gray-100 font-light">5:13</span>
          </div>
        </div>
      </footer>
  </div>

</nav>

