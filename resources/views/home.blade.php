@include('components.navbar')

<!-- welcome to bongo music -->
<section class="px-2 bg-white md:px-0">
  <div class="items-center max-w-6xl  mx-auto xl:px-5 md:mt-0 mt-28">
    <div class="flex flex-col-reverse items-center  h-screen mx-auto space-y-0 md:space-y-0 md:flex-row">
      <div class="w-full md:w-1/2 md:px-3 md:text-left lg:text-left text-center">
        <div class="w-full pb-6 space-y-6 sm:max-w-md lg:max-w-lg md:space-y-4 lg:space-y-8 xl:space-y-9 sm:pr-5 lg:pr-0 md:pb-0">
          <h1 class="text-4xl mt-8 font-extrabold tracking-tight text-gray-900 sm:text-5xl md:text-4xl lg:text-5xl xl:text-6xl">
            <span class="block xl:inline">Welcome to </span>
            <span class="block text-transparent bg-clip-text bg-gradient-to-r from-indigo-700 via-purple-700 to-pink-700 xl:inline">Bongo Music Africa.</span>
          </h1>
          <p class="mx-auto text-base text-gray-500 sm:max-w-md lg:text-xl md:max-w-3xl">Igbo Music Community and Online Stream Platform that deals with Igbo Bongo Artist, Igbo High - Life, Igbo Traditional and Local Tribal Igbo Band in Eastern Nigeria.</p>
          <div class="relative flex flex-col sm:flex-row sm:space-x-4">
            <a href="#_" class="flex items-center w-full px-6 py-3 mb-3 text-lg text-white bg-indigo-600 rounded-md sm:mb-0 hover:bg-indigo-700 sm:w-auto">
              Explore
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 ml-1" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="5" y1="12" x2="19" y2="12"></line><polyline points="12 5 19 12 12 19"></polyline></svg>
            </a>
            <a href="#_" class="flex items-center px-6 py-3 text-gray-500 bg-gray-100 rounded-md hover:bg-gray-200 hover:text-gray-600">
              Get Started
            </a>
          </div>
        </div>
      </div>
      <div class="w-full md:w-1/2">
            <div id="logos-home-page">
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide"><img class="alignnone w-1/2 wp-image-13024 rounded-full" src="images/slider/slider3.png" alt="" /></div>
                        <div class="slide"><img class="alignnone w-1/2 wp-image-13024 rounded-full" src="images/slider/slider2.png" alt="" /></div>
                        <div class="slide"><img class="alignnone w-1/2 wp-image-13024 rounded-full" src="images/slider/slider1.png" alt="" /></div>
                    </div>
                </div>
            </div>
      </div>
    </div>
  </div>
</section>
<!-- End welcome to bongo music -->

<!-- Blog latest news and Breackingnews -->
<section>
    <div class="max-w-screen-2xl mx-auto p-5 sm:p-10 relative">
        <div class="grid sm:grid-cols-2 gap-10">
           
                
        
            @include('blog.homepage_latestnews')
        
        
            @include('blog.homepage_breakingnews')
        
            
        </div>
    </div>
</section> 
<!-- End Blog latest news and Breackingnews -->


<!-- Section 3 -->
<section class="items-center justify-center bg-white pt-7 pb-7 md:pb-24">
    <h2 class="mb-0 text-2xl text-left ml-20 font-bold tracking-tight text-gray-900 dark:text-white"><mark class="px-2 text-white bg-blue-600 rounded dark:bg-blue-500">Top 5</mark> Trending Music</h2>
    <div class="box-border flex flex-col items-center content-center leading-6 text-black border-0 border-gray-300 border-solid md:flex-row max-w-7xl lg:px-16">

        @include('components.top5trending')
        
        <div class="w-full">
           <div class="items-center px-4">
                <div class="flex flex-wrap items-center">
                  <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
                    <div class="w-full lg:max-w-md">
                      <h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight sm:text-4xl font-heading">The Best <span class="text-transparent bg-clip-text bg-gradient-to-r to-emerald-600 from-sky-400"> Igbo Music </span> Streaming Site</h2>
                      <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Trending Music, the premier destination for streaming the latest Igbo music. With a vast library of igbo songs from top artists, Bongo Music is your go-to source for all things Igbo music. Start listening now and discover your new favorite artist!</p>
                      <ul>
                        <li class="flex items-center py-2 space-x-4 xl:py-3">
                          <svg width="24" height="24" viewBox="0 0 24 24">
                              <path d="M7 5h10v2h2V3c0-1.1-.9-1.99-2-1.99L7 1c-1.1 0-2 .9-2 2v4h2V5zm8.41 11.59L20 12l-4.59-4.59L14 8.83 17.17 12 14 15.17l1.41 1.42zM10 15.17L6.83 12 10 8.83 8.59 7.41 4 12l4.59 4.59L10 15.17zM17 19H7v-2H5v4c0 1.1.9 2 2 2h10c1.1 0 2-.9 2-2v-4h-2v2z" fill="#FF00FF"/>
                            </svg>

                          <span class="font-medium text-gray-500">Easy-to-use interface</span>
                        </li>
                        <li class="flex items-center py-2 space-x-4 xl:py-3">
                          <svg width="24" height="24" viewBox="0 0 24 24">
                              <path d="M12 3v9.28c-.47-.17-.97-.28-1.5-.28C8.01 12 6 14.01 6 16.5S8.01 21 10.5 21c2.31 0 4.2-1.75 4.45-4H15V6h4V3h-7z" fill="#FF00FF"/>
                            </svg>

                          <span class="font-medium text-gray-500">High-quality audio</span>
                        </li>
                        <li class="flex items-center py-2 space-x-4 xl:py-3">
                          <svg width="24" height="24" viewBox="0 0 24 24">
                              <path d="M15 6H3v2h12V6zm0 4H3v2h12v-2zM3 16h8v-2H3v2zM17 6v8.18c-.31-.11-.65-.18-1-.18-1.66 0-3 1.34-3 3s1.34 3 3 3 3-1.34 3-3V8h3V6h-5z" fill="#FF00FF"/>
                            </svg>
                          <span class="font-medium text-gray-500">Personalized playlists</span>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="images/slider/slider3.png" alt="feature image"></div>
                </div>
            </div>
        </div>
</section>


<!-- Blog business news and Event -->
<section>
    <div class="max-w-screen-2xl mx-auto p-5 sm:p-10 relative">
        <div class="grid sm:grid-cols-2 gap-10">
        
            @include('blog.homepage_businessnews')
        
            @include('blog.homepage_event')
        
        </div>
    </div>
</section>
<!-- End Blog business news and History -->

<!-- Section 4 -->
<section class="py-20 bg-gray-50">
  <div class="container items-center max-w-6xl px-4 px-10 mx-auto sm:px-20 md:px-32 lg:px-16">
    <div class="flex flex-wrap items-center -mx-3">
      <div class="order-1 w-full px-3 lg:w-1/2 lg:order-0">
        <div class="w-full lg:max-w-md">
          <h2 class="mb-4 text-3xl font-bold leading-tight tracking-tight sm:text-4xl font-heading">Discover the Best Igbo Music on Bongo Music</h2>
          <p class="mb-4 font-medium tracking-tight text-gray-400 xl:mb-6">Bongo Music is home to the best Igbo music from top artists in Nigeria. From traditional folk songs to modern pop hits, you'll find a wide variety of music to suit your taste. Explore our extensive library of Igbo music and discover new artists today.</p>
         
        @include('components.top5artists')
       
        </div>
      </div>
      <div class="w-full px-3 mb-12 lg:w-1/2 order-0 lg:order-1 lg:mb-0"><img class="mx-auto sm:max-w-sm lg:max-w-full" src="images/slider/section2.gif" alt="feature image"></div>
    </div>
  </div>
</section>

<!-- Blog business news and History -->
<section>
    <div class="max-w-screen-2xl mx-auto p-5 sm:p-10 relative">
        <div class="grid sm:grid-cols-2 gap-10">
            
            @include('blog.homepage_sportsnews')

            @include('blog.homepage_ict_tech')
        
        </div>
    </div>
</section>
<!-- End Blog business news and History -->

<!-- Section 5 -->
<section class="flex items-center justify-center py-20 bg-white min-w-screen m-2">
    <div class="md:px-16 lg:px-16 px-4 bg-white">
        <div class="container flex flex-col items-start mx-auto lg:items-center">
            <p class="relative flex items-start justify-start w-full text-lg font-bold tracking-wider text-purple-500 uppercase lg:justify-center lg:items-center">Stay Up-to-Date</p>


            <h2 class="relative flex items-start justify-start w-full max-w-3xl text-5xl font-bold lg:justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="absolute right-0 hidden w-12 h-12 -mt-2 -mr-16 text-gray-200 lg:inline-block" viewBox="0 0 975.036 975.036">
                <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z">
                </path>
            </svg>
                Latest hits and discover new artists.</h2>
                <div class="block w-full h-0.5 max-w-lg mt-6 bg-purple-100 rounded-full"></div>

            <div class="items-center justify-center w-full mt-12 mb-4 lg:flex">
                
                    @include('components.just_added')
               
            </div>
        </div>
    </div>
</section>

<section>
    <div class="max-w-screen-2xl mx-auto p-5 sm:p-10 relative">
        <div class="grid sm:grid-cols-2 gap-10">
            
            @include('blog.homepage_wisewords')
            @include('blog.homepage_history')
        
        </div>
    </div>
</section>



<!-- Section 7 -->
<section class="bg-white">
    <div class="max-w-screen-xl px-4 py-12 mx-auto space-y-8 overflow-hidden sm:px-6 lg:px-8">
        <nav class="flex flex-wrap justify-center -mx-5 -my-2">
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    About
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Promotion
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Contact
                </a>
            </div>
            <div class="px-5 py-2">
                <a href="#" class="text-base leading-6 text-gray-500 hover:text-gray-900">
                    Terms
                </a>
            </div>
        </nav>
        <div class="flex justify-center mt-8 space-x-6">
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Facebook</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Instagram</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z" clip-rule="evenodd"></path>
                </svg>
            </a>
            <a href="#" class="text-gray-400 hover:text-gray-500">
                <span class="sr-only">Twitter</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84"></path>
                </svg>
            </a>
        </div>

        <p class="mt-8 text-base leading-6 text-center text-gray-400">
            © 2023 Bongo Nusic Africa, Inc. All rights reserved.
        </p>
    </div>
</section>




@include('components.footer')
