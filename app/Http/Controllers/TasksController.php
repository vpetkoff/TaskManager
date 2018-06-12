<?php

namespace App\Http\Controllers;

use App\Tasks;
use Illuminate\Http\Request;

class TasksController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks = Tasks::all()->sortByDesc('created_at');

        return view('index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tasks.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        // Validate the request values which
        // we got from the creation form
        $this->validate($request,[
          'taskCreateArea'=>'required|max:1000',
          'taskCreateAuthor'=>'required|max:20'
        ]);

        $task = new Tasks;

        $task->body = $request->taskCreateArea;
        $task->author = $request->taskCreateAuthor;

        $task->save();

        return redirect('/')->with('msg', "TASK SUCCESSFULLY CREATED");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function show(Tasks $tasks, $id)
    {
        $task = Tasks::findOrFail($id);
        //echo $task;
        return view('tasks.show', compact('task'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function edit(Tasks $tasks, $id)
    {
        $task = Tasks::findOrFail($id);

        return view('tasks/edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tasks $tasks, $id)
    {
        // Validate the request values which
        // we got from the edit form
        $this->validate($request,[
          'taskEditArea'=>'required|max:1000',
          'taskEditAuthor'=>'required|max:20'
        ]);

        $task = Tasks::findOrFail($id);

        $task->body = $request->taskEditArea;
        $task->author = $request->taskEditAuthor;

        $task->save();

        return redirect('/')->with('msg', "TASK SUCCESSFULLY UPDATED");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Tasks  $tasks
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tasks $tasks, $id)
    {
        Tasks::findOrFail($id)->delete();

        return redirect('/')->with('msg', "TASK SUCCESSFULLY DELETED");
    }
}
