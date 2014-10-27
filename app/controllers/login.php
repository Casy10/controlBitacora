<?php 
class Login_Controller extends Base_Controller
{
 
    public $restful = true;
    public function get_index()
    {

        if(Auth::user())
        {
            return Redirect::to('home');
        }
        return View::make('login.index')->with('title','Login');
 
    }
 
    public function post_index()
    {

        $userdata = array(
 
            'username' => Input::get('usuario'),
            'password'=> Input::get('password'),
 
        ); 

        if(Auth::attempt($userdata, true))
        {
 
            return Redirect::to('home');
 
        }else{
            return Redirect::to('login')->with('error_login', true);
        }
 
    }
 
}
