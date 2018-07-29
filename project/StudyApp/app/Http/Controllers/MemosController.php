<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Memo;

class MemosController extends Controller
{

  public function index(){
    // $memos = Memo::all();
    $memos = Memo::orderBy('created_at', 'DESC')->get();

    return view('memos.index')->with('memos', $memos);
  }

  public function create(){
      return view('memos.create');
  }

  public function store(Request $request){
    Memo::create(
      array(
        'name' => $request->name,
        'text' => $request->text
      )
    );
    // eval(\Psy\SH());
    return view('memos.store');
  }

  public function destroy($id){
    Memo::destroy($id);
    return view('memos.destroy');
  }

  public function edit($id){
     $memo = Memo::find($id);
     return view('memos.edit')->with('memo', $memo);
 }

 public function update($id, Request $request){
   Memo::find($id)->update(
     array(
       'name' => $request->name,
       'text' => $request->text
      )
    );
    return view('memos.update');
 }

}
