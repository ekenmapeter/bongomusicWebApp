<?php

namespace App\Http\Controllers;
use App\Models\Trending;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    public function show()
  {

       
    return view('explore');
  }
}
