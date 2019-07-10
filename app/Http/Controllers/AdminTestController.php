<?php

namespace App\Http\Controllers;
use App\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminRequest;

class AdminTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $test = Admin::get();
        return view('admin/admins/index')->with('test', $test);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/admins/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminRequest $request)
    {
        
        $add = new Admin;
        $add->name = $request->name;
        $add->email = $request->email;
        $add->password = bcrypt(request('password')); 

        $add->save();

        return redirect(url('admin/ad/index'));   
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $trashed=Admin::onlyTrashed()->orderBy('id', 'asc')->get();

        return view('admin/admins/show')->with('trashed', $trashed);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $admin =Admin::find($id);
        // return  $admin;
        return view('admin/admins/edit',compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminRequest $request)
    {
        // return 'test';
        Admin::where('id', $request->id)
            ->update(['name'=>$request->name, 'email'=>$request->email, 'password'=>$request->password]);
        return redirect(url('admin/ad/index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $del=Admin::where('id',$id)->first();
        if($del!=null){
            $del->delete();
             return redirect(url('admin/ad/index'))->with(['message'=> 'Successfully deleted!!'
        ]); 
        }   
        //return 'deleted';
        
        return redirect(url('admin/ad/index'))->with(['message'=> 'Wrong ID!!']);
        
    }
}
