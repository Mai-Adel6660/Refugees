<?php

namespace App\Http\Controllers;
use App\Donor;
use Illuminate\Http\Request;

class DonorsController extends Controller
{
    public function index()
    {
    	$donors = Donor::get();
    	return view('admin/donor/index')->with('donors', $donors);
    }

    public function destroy($id)
    {
    	$donors = Donor::find($id)->delete();
    	return redirect()->back();
    }
}
