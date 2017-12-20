<?php

namespace App\Http\Controllers;

use App\Job;
use Illuminate\Http\Request;

class JobController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = \App\Job::paginate(15);
        return view('admin.job.index', compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.job.insert');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $job = new Job();
        $job->name = $request->job["name"];
        $job->save();
        flash('Profissão Inserida Com Sucesso!!!')->important()->success();
        return redirect()->back();
    }

    public function update_job(Request $request, $id)
    {
        $job=Job::findOrFail($id);
        $job->name = $request->name;
        $job->save();
        return response()->json(array('status' => 'complete', 'name' => $request->name));
    }
}
