<?php

namespace App\Http\Controllers;
use App\Apartment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests\ApartmentRequest;

class ApartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function index()
    {
        $apart = Apartment::paginate(1);
        //return $apart;
        return view('admin/apart/index')->with('apart', $apart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/apart/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->merge(['admin_id'=>1]);
        $input = $request->all();
        if(isset($input['img'])){ //if i want to upload img
            //upload image

            $input['img']=$this->upload($input['img']);
        }else{ //if there is no image to upload -> it will be here an img by default
            $input['img'] = 'images/defImg.jpg';
        }
        //$input['user_id']=Auth::user()->id;
        Apartment::create($input);

        return redirect(url('admin/apart/index'));
    }
    public function upload($file)
    {
        $extension = $file->getClientOriginalExtension(); //2
        $sha1 = sha1($file->getClientOriginalName()); //hash name of file //3
        $filename = date('Y-m-d-h-i-s').".".$sha1.".".$extension; //finally name
        $path = public_path('images/Apartadded/');
        $file->move($path, $filename); //step 1

        return 'images/Apartadded/'.$filename;
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
        
        $apart = Apartment::find($id);
        return view('admin/apart/edit')->with('apart', $apart);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Apartment $apartment ,ApartmentRequest $request)
    {
       $input = $request->all();
        if(isset($input['img'])){ //if i want to upload img
            //upload image

            $input['img']=$this->upload($input['img']);
        }
        $apartment->update( $input);
        return redirect(url('admin/apart/index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $aparts = Apartment::find($id)->delete();
        return redirect()->back();
    }

}
