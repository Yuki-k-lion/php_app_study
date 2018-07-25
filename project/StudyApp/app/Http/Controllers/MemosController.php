<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MemosController extends Controller
{
  public function index()
  {
    $memos = Memo::all();

    return view('memos.index')->with('memos', $memos);
  }
  public function create()
{
    return view('memos.create');
}
}
