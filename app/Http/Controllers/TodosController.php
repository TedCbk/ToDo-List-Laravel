<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodosController extends Controller
{
    /**
     * Display a listing of the resource. with php artisan make:controller TodosController --resource
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$todos = Todo::all();
        //Ordering by the most recent
        $todos = Todo::orderBy('created_at', 'desc')->get();
        return view('todos.index')->with('todos', $todos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('todos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validate the form submittion requiring a text value
        $this->validate($request, [
            'Task' => 'required',
            'Description' => 'required',
            'Date' => 'required'
            ]);

        // Create a Todo
        $todo = new Todo;
        $todo->text = $request->input('Task');
        $todo->body = $request->input('Description');
        $todo->due = $request->input('Date');

        $todo->save();

        return redirect('/')->with('success', 'Todo Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $todo = Todo::find($id);
        return view('todos.show')->with('todo', $todo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $todo = Todo::find($id);
        return view('todos.edit')->with('todo', $todo);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $todo = Todo::find($id);
        $todo->text = $request->input('Task');
        $todo->body = $request->input('Description');
        $todo->due = $request->input('Date');

        $todo->save();

        return redirect('/')->with('success', 'Todo Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo = Todo::find($id);
        $todo->delete();

        return redirect('/')->with('success', 'Todo Deleted');
    }
}
