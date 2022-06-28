<?php

namespace App\Http\Controllers;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class reportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reports=Report::all();
        return view('reportManagement',['reports' => $reports]);
    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $tasks = DB::select('select * from tasks where id = ?', [$id]);
        return view('sendReport',['tasks' => $tasks]);
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
            'id' => ['required', 'unique:reports'],
            'employee_ID' => ['required','exists:users,id'],  
            'task_ID' => ['required','unique:reports'],             
            'file' => ['required', 'string', 'max:255'],
        ]);

        $report = Report::create([
            'id' => $request->input('id'),            
            'employee_ID' => $request->input('employee_ID'),
            'task_ID' => $request->input('task_ID'),
            'file'  => $request->input('file'),
        ]);
        
        
        return redirect('dashboard');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Report::where('id',$id)->delete();
        return redirect('/reportManagement');
    }

    
}
