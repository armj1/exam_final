<?php

namespace App\Http\Controllers;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class taskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tasks=Task::all();
        return view('listTasks',['tasks' => $tasks]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('assignTask');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {        
        $request->validate([
            'id' => ['required', 'unique:tasks'],
            'employee_ID' => ['required','exists:users,id'],            
            'description' => ['required', 'string', 'max:255'],
            'term' => ['required','string', 'max:255'],
        

        ]);

        $task = Task::create([
            'id' => $request->id,            
            'employee_ID' => $request->employee_ID,
            'description' => $request->description,
            'term'  => $request->term,
        ]);
        
        
        return redirect('assignTask');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tasks = DB::select('select * from tasks where id = ?', [$id]);
        return view('updateTask',['tasks' => $tasks]);
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
        $task=Task::find($id);
        $task->description = $request->input('description');
        $task->term = $request->input('term');

        $request->validate([       
            'description' => ['required', 'string', 'max:255'],
            'term' => ['required', 'string', 'max:255'],
        ]);

        $task->save();

        return redirect('/DeleteUpdateTask');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Task::where('id',$id)->delete();
        return redirect('/DeleteUpdateTask');
    }

    public function DeleteUpdateIndex(){
        $tasks=Task::all();
        return view('DeleteUpdateTask',['tasks' => $tasks]);
    }
}
