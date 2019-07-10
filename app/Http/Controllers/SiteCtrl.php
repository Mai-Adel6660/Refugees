<?php

namespace App\Http\Controllers;
use App\Jobs;
use App\Apartment;
use App\User;
use App\Category;
use Auth;
use Socialite;

use Illuminate\Http\Request;

class SiteCtrl extends Controller
{
    protected $redirectTo = '/home';

    public function jobs()
    {
    	$jobs = Jobs::paginate(1);
        $category = Category::get();

		return view('style.jobs.job')->with(compact('jobs'))->with(compact('category'));

    }

    public function apartments()
    {
    	$apartments =Apartment::paginate(1);
    	return view('style.apartments.apartment',compact('apartments'));
    }

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function logout()
    {
        auth()->guard()->logout();
        return redirect(URL('/login'));
    }

    public function socialLogin($social)
    {
        return Socialite::driver($social)->redirect(); //This method handles redirect from our site to the Auth provider(social media).
    }

    public function handleProvderCallBack($social)
    {
        $userSocial = Socialite::driver($social)->user();//will read the incoming request and retrieve the user’s information from the provider(social media).

        
       $user = $this->findOrCreateUser($userSocial, $social);
       Auth::login($user, true);
       return redirect($this->redirectTo);

    }

    public function findOrCreateUser($userSocial, $social)
    {
        $user = User::where('social_id', $userSocial->id)->first();
        if($user){ 
            return $user;
        }else{
            return User::create([
                'name'      =>$userSocial->name,
                'email'     =>$userSocial->email,
                'social'    =>$social,
                'social_id' =>$userSocial->id,
                'password'  =>bcrypt($userSocial->id)

            ]);
        }
    }




    public function show($id)
    {
       $category = Category::find($id);
       $job = Jobs::find($id);
        
       // dd($category->id);
       dd($job->category_id);

        // if($category->id=$job->category->id){
        //     $job=Jobs::all()->where('id',$id);
        //     return $job;
        // }else{
        //     return "fail";
        // }
    }
    
}
