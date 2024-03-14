<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{

    public function index(){

        $todos = Todo::all();
        return view('todos.index', [
            'todos' => $todos,
        ]);
    }
    public function store(  Request $request){
        $status = $request->status;
      if($request->status == "on"){
          $status = 1;
      }else{
          $status = 0;
      }
      
        Todo::create([
            'titel' => $request->title,
            'deteils'=> $request->details,
            'status' => $status,
            'user_id' => 1,
        ]);
        return redirect()->route('todos.index');
    }
    public function Create(){
  return view('todos.create');
    }
    public function Update(Request $request , $id){
        $todo = Todo::findOrFail($id);

        if($request->status == "1"){
            $status = 1;
        }elseif ($request->status == "0" ) {
            $status = 0;
        }
        $todo->status = $status;
        $todo->titel= $request->title;
        $todo->deteils=$request->details;
        $todo->save();
    
        return redirect()->route('todos.index');
    }

    public function StatusUpdate(Request $request , $id){
        $todo = Todo::findOrFail($id);

    $status = $request->has('status') ? 1 : 0;
    $todo->status = $status;
    $todo->save();

    return redirect()->route('todos.index');
    }

    public function edit(Request $request){
        $todos = $todos = Todo::where('id', $request->id)->get();
        foreach($todos as $tod);
        return view('todos.edit', ['todos' => $tod]);
          }

     public function destroy($id)
    {
         $todo = Todo::findOrFail($id);
         $todo->delete();
         return redirect()->route('todos.index');
    }
}
