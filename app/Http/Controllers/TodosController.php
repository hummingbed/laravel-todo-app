<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodosController extends Controller
{
    public function getAllTodos() {
        $todos = Todo::all();
        return view('todos.todo')->with('todos', $todos);
    }

    public function getSingleTodo($id) {
        $todos = Todo::find($id);
        return view('todos.show')->with('todo', $todos);
    }
    public function createTodo() {
        return view('todos.create');
    }
    public function saveTodo() {

        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required|min:6|max:255',
        ]);

         $data = request()->all();

         $todo = new Todo();
         $todo->name = $data['name'];
         $todo->description = $data['description'];
         $todo->completed = false;

         $todo->save();
         return redirect('/todo');
    }

    public function editTodo($id) {
        $todos = Todo::find($id);
        return view('todos.edit')->with('todo', $todos);
    }

    public function updateTodo($id) {

        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required|min:6|max:255',
        ]);

        $data = request()->all();

        $todo = Todo::find($id);
        $todo->name = $data['name'];
        $todo->description = $data['description'];
//        $todo->completed = false;

        $todo->save();
        return redirect('/todo');
    }

    public function deleteTodo($id) {
        $todos = Todo::find($id);
        $todos->delete();
        return redirect('/todo');
    }
}
