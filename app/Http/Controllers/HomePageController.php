<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\Track;
use App\Models\Trending;
use App\Models\Artist;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Collection;
use Illuminate\Pagination\Paginator;
use ProtoneMedia\Splade\Facades\Splade;


class HomePageController extends Controller
{
    public function index(Request $request)
{           
            // Latest News
            $latestNews =  Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts');
            $latest = $latestNews->json();
            // Convert the latest news array to a collection
            $latest = collect($latest);
            $excludeLatest = collect($latest);
            // Exclude the first item from the collection
            $excludeLatest->forget(0);
            // get first post
            $getFirstPost = $latest[0];
            // Paginate the collection
            $paginatedLatest = new Paginator($excludeLatest, 3);
          

            //Breaking News
            $breakingNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=3&per_page=4');
            $breaking = $breakingNews->json();
            // Convert the breaking news array to a collection
            $breaking = collect($breaking);
            $excludeBreaking = collect($breaking);
            // Exclude the first item from the collection
            $excludeBreaking->forget(0);
            // get first post
            $getFirstPostBreaking = $breaking[0];
            // Paginate the collection
            $paginatedBreaking = new Paginator($excludeBreaking, 3);


            //History
            $historyNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=9&per_page=4');
            $history = $historyNews->json();
            $history = collect($history);
            $excludedHistoryNews = collect($history);
            $excludedHistoryNews->forget(0);
            $getFirstHistoryPost = $history[0];
            $paginatedHistory = new Paginator($excludedHistoryNews, 3);



            //Business News
            $businessNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=15&per_page=4');
            $business = $businessNews->json();
            // Convert the business news array to a collection
            $business = collect($business);
            $excludeBusiness = collect($business);
            // Exclude the first item from the collection
            $excludeBusiness->forget(0);
            // get first post
            $getFirstBusinessPost = $business[0];
            // Paginate the collection
            $paginatedBusiness = new Paginator($excludeBusiness, 3);


            // Event News
            $eventNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=10&per_page=4');
            $event = $eventNews->json();
            // Convert the event news array to a collection
            $event = collect($event);
            $excludeEvent = collect($event);
            // Exclude the first item from the collection
            $excludeEvent->forget(0);
            // get first post
            $getFirstEventPost = $event[0];
            // Paginate the collection
            $paginatedEvent = new Paginator($excludeEvent, 3);



            // Sport News
            $sportNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=13&per_page=4');
            $sport = $sportNews->json();
            // Convert the sport news array to a collection
            $sport = collect($sport);
            $excludeSport = collect($sport);
            // Exclude the first item from the collection
            $excludeSport->forget(0);
            // get first post
            $getFirstSportPost = $sport[0];
            // Paginate the collection
            $paginatedSport = new Paginator($excludeSport, 3);


            // ICT / TECH News
            $ictNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=14&per_page=4');
            $ict = $ictNews->json();
            // Convert the ICT / TECH news array to a collection
            $ict = collect($ict);
            $excludeIct = collect($ict);
            // Exclude the first item from the collection
            $excludeIct->forget(0);
            // get first post
            $getFirstIctPost = $ict[0];
            // Paginate the collection
            $paginatedIct = new Paginator($excludeIct, 3);
            

            // Wise words News
            $wiseNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=12&per_page=4');
            $wise = $wiseNews->json();
            // Convert the Wise words news array to a collection
            $wise = collect($wise);
            $excludeWise = collect($wise);
            // Exclude the first item from the collection
            $excludeWise->forget(0);
            // get first post
            $getFirstWisePost = $wise[0];
            // Paginate the collection
            $paginatedWise = new Paginator($excludeWise, 3);
    
    return view('home', ['trendingMusic' => Trending::latest()->get(),
                         'topArtist' => Artist::latest()->paginate(5),
                         'just_added' => Track::orderBy('created_at', 'desc')->paginate(10),
                         'paginatedLatest' => $paginatedLatest,
                         'getFirstPost' => $getFirstPost,
                         'getFirstPostBreaking' => $getFirstPostBreaking,
                         'paginatedBreaking' => $paginatedBreaking,
                         'getFirstBusinessPost' => $getFirstBusinessPost,
                         'paginatedBusiness' => $paginatedBusiness,
                         'getFirstEventPost' => $getFirstEventPost,
                         'paginatedEvent' => $paginatedEvent,
                         'getFirstSportPost' => $getFirstSportPost,
                         'paginatedSport' => $paginatedSport,
                         'getFirstIctPost' => $getFirstIctPost,
                         'paginatedIct' => $paginatedIct,
                         'getFirstWisePost' => $getFirstWisePost,
                         'paginatedWise' => $paginatedWise,
                         'getFirstHistoryPost' => $getFirstHistoryPost,
                         'paginatedHistory' => $paginatedHistory,

    ]);
}



   // Latest News
    public function getLatestNews()
    {
            $latestNews =  Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts');
            $latest = $latestNews->json();

            // Convert the latest news array to a collection
            $latest = collect($latest);

            $excludeLatest = collect($latest);

            // Exclude the first item from the collection
            $excludeLatest->forget(0);

            // get first post
            $getFirstPost = $latest[0];

            // Paginate the collection
            $paginatedLatest = new Paginator($excludeLatest, 3);

        return response()->json([
          'paginatedLatest' => $paginatedLatest,
          'getFirstPost' => $getFirstPost
        ]);
    }


        // getHistoryNews 
    public function getHistoryNews()
    {
        $historyNewsResponse = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=9&per_page=4');
        $historyNews = $historyNewsResponse->json();

        $historyNews = collect($historyNews);

        $excludedHistoryNews = $historyNews->forget(0);

        $firstHistoryNewsPost = $historyNews[0];

        $paginatedHistoryNews = new Paginator($excludedHistoryNews, 3);

        return response()->json(['paginatedHistoryNews' => $paginatedHistoryNews, 'firstHistoryNewsPost' => $firstHistoryNewsPost]);
    }


 
    

    // breakingNews News
    public function getBreakingNews()
    {
        // Breaking News
            $breakingNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=3&per_page=4');
            $breaking = $breakingNews->json();

            // Convert the breaking news array to a collection
            $breaking = collect($breaking);

            $excludeBreaking = collect($breaking);

            // Exclude the first item from the collection
            $excludeBreaking->forget(0);

            // get first post
            $getFirstPostBreaking = $breaking[0];

            // Paginate the collection
            $paginatedBreaking = new Paginator($excludeBreaking, 3);

        return response()->json(['paginatedBreaking' => $paginatedBreaking, 'getFirstPostBreaking' => $getFirstPostBreaking]);
    }


    // Business News
    public function getBusinessNews()
    {
        // Business News
            $businessNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=15&per_page=4');
            $business = $businessNews->json();

            // Convert the business news array to a collection
            $business = collect($business);

            $excludeBusiness = collect($business);

            // Exclude the first item from the collection
            $excludeBusiness->forget(0);

            // get first post
            $getFirstBusinessPost = $business[0];

            // Paginate the collection
            $paginatedBusiness = new Paginator($excludeBusiness, 3);

        return response()->json(['paginatedBusiness' => $paginatedBusiness, 'getFirstBusinessPost' => $getFirstBusinessPost]);
    }


    // Event News
    public function getEventNews()
    {
        // Event News
            $eventNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=10&per_page=4');
            $event = $eventNews->json();

            // Convert the event news array to a collection
            $event = collect($event);

            $excludeEvent = collect($event);

            // Exclude the first item from the collection
            $excludeEvent->forget(0);

            // get first post
            $getFirstEventPost = $event[0];

            // Paginate the collection
            $paginatedEvent = new Paginator($excludeEvent, 3);

        return response()->json(['paginatedEvent' => $paginatedEvent, 'getFirstEventPost' => $getFirstEventPost]);
    }   


    // Sport News
    public function getSportNews()
    {
        // Sport News
            $sportNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=13&per_page=4');
            $sport = $sportNews->json();

            // Convert the sport news array to a collection
            $sport = collect($sport);

            $excludeSport = collect($sport);

            // Exclude the first item from the collection
            $excludeSport->forget(0);

            // get first post
            $getFirstSportPost = $sport[0];

            // Paginate the collection
            $paginatedSport = new Paginator($excludeSport, 3);

        return response()->json(['paginatedSport' => $paginatedSport, 'getFirstSportPost' => $getFirstSportPost]);
    } 


    // ICT / TECH News
    public function getIctNews()
    {
        // ICT / TECH News
            $ictNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=14&per_page=4');
            $ict = $ictNews->json();

            // Convert the ICT / TECH news array to a collection
            $ict = collect($ict);

            $excludeIct = collect($ict);

            // Exclude the first item from the collection
            $excludeIct->forget(0);

            // get first post
            $getFirstIctPost = $ict[0];

            // Paginate the collection
            $paginatedIct = new Paginator($excludeIct, 3);

        return response()->json(['paginatedIct' => $paginatedIct, 'getFirstIctPost' => $getFirstIctPost]);
    } 


    public function getWiseNews()
    {
        // Wise words News
            $wiseNews = Http::get('https://api.bongomusic.com.ng/wp-json/wp/v2/posts/?categories=12&per_page=4');
            $wise = $wiseNews->json();

            // Convert the Wise words news array to a collection
            $wise = collect($wise);

            $excludeWise = collect($wise);

            // Exclude the first item from the collection
            $excludeWise->forget(0);

            // get first post
            $getFirstWisePost = $wise[0];

            // Paginate the collection
            $paginatedWise = new Paginator($excludeWise, 3);

        return response()->json(['paginatedWise' => $paginatedWise, 'getFirstWisePost' => $getFirstWisePost]);
    } 
}

