<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Memo;

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
  public function store(Request $request)
  {
    Memo::create(
      array(
        'name' => $request->name,
        'text' => $request->text
      )
    );

    return view('memos.store');
  }
}
