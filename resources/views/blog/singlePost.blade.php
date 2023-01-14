<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="csrf-token" content="{{ csrf_token() }}" />
        <meta name="yandex-verification" content="285aeae9e7a3d3e8" />
      
       


        <link href="favicon.png" rel="icon" />
        <script src="https://cdn.tailwindcss.com"></script>
        <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
        <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css" />
        <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
        <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" />
    </head>
    <body class="bg-white md:bg-gray-100 lg:bg-gray-100 p-4 flex flex-col gap-5">
       @include('components.navbar')

        <div class="main grid md:grid-cols-12 lg:grid-cols-12 grid-cols-1 justify-between gap-5 md:mt-24 lg:mt-24 mt-12">
            <div class="md:col-span-9 md:flex md:gap-5">
                <div class="hidden md:block md:w-72 flex-none border-r border-gray-100">
                   @include('blog.leftSideBar') 
                </div>

                <div class="flex-grow flex flex-col gap-5">
                   
                    <div class="blog bg-white overflow-hidden flex flex-col md:mx-auto">
                        <div class="sm:flex justify-between items-start gap-3 p-2 pb-3 pt-4">
                            <a href="#" class="font-semibold text-xl md:text-2xl inline-block hover:text-red-700 transition duration-500 ease-in-out inline-block mb-2">{{ $post['title']['rendered'] }}</a>
                            <div class="w-64 flex items-center">
                                <a href="#"><img class="w-10 h-10 rounded-full mr-2" src="../images/logo.png" alt="Avatar of Jonathan Reinink" /></a>
                                <div class="text-xs">
                                    <a href="#" class="text-gray-900 font-semibold leading-none text-sm hover:text-red-700">{{ $post['yoast_head_json']['author'] }}</a>
                                    <p class="text-gray-600 text-xs">Author</p>
                                </div>
                            </div>
                        </div>
                        <div class="relative">
                            <a href="#">
                                <img class="w-full" src="{{ $post['featured_media_src_url']}}" alt="{{ $post['title']['rendered']}}" />
                            </a>
                        </div>
                        <div class="p-7">
                            <p class="text-gray-700 text-base leading-8">
                               {!! $post['content']['rendered'] !!}
                            </p>
                             @include('blog.sharePost') 
                        </div>
                        <hr />
                    </div>
                     
                </div>
            </div>

           @include('blog.trendingSinglePost') 
        </div>

    </body>
    @include('components.footer') 
</html>
