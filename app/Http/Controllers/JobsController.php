<?php

namespace App\Http\Controllers;
use App\Jobs;
use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\jobRequest;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $job = Jobs::paginate(1);
        // return $job;
        return view('admin/job/index')->with('job',$job);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $categories = Category::get();
        return view('admin/job/create')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(jobRequest $request)
    {
        $inputs = $request->all();
        $inputs['admin_id'] = Auth::guard('admin')->id();
        Jobs::create($inputs);
        // $job = new Jobs;

        // $job->name_job  = $request->name_job;
        // $job->seniority = $request->seniority;
        // $job->details   = $request->details;
        // $job->type      = $request->type;
        // $job->sallery   = $request->sallery;
        // $job->category_id   = $request->category_id;
        // $job->admin_id   = Auth::guard('admin')->id();

        // $job->save();
        return redirect(url('admin/job/index'));

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
        $job = Jobs::find($id);

        return view('admin/job/edit')->with('job', $job);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(jobRequest $request)
    {
        Jobs::where('id', $request->id)->update([
            'name_job'  =>$request->name_job,
            'seniority' =>$request->seniority,
            'details'   =>$request->details,    
            'type'      =>$request->type,    
            'sallery'   =>$request->sallery,    

       ]);

        return redirect(url('admin/job/index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jobs = Jobs::find($id)->delete();
        return redirect()->back();
    }
}
