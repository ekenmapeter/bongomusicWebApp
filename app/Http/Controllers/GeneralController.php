<?php

namespace App\Http\Controllers;
use App\Models\Trending;
use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function terms()
  {

    
    return view('terms');
  }

  public function contact()
  {

  
    
    return view('contact');
  }

  public function promotion()
  {

    
    return view('promotion');
  }

  public function about()
  {
 
    
    return view('about');
  }
}
