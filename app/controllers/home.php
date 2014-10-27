<?php 
class Home_Controller extends Base_Controller
{
 
    public $restful = true;

    public function __construct()
    {
 
        parent::__construct();        
        $this->filter('before', 'auth');
 
    }
 
    public function get_index()
    {
 
        return View::make('home.index')->with('title','Bienvenido');
 
    }
 
    public function get_logout()
    {
 
        Auth::logout();
        return Redirect::to('login')->with('mensaje','¡Has cerrado sesión correctamente!.');
 
    }
 
}