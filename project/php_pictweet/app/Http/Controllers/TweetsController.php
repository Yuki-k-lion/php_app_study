<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Tweet;

class TweetsController extends Controller
{
  public function index()
  {
    // $tweet = Tweet::find(1);
    $tweets = Tweet::all();

    return view('tweets.index')->with('tweets', $tweets);
  }
}
