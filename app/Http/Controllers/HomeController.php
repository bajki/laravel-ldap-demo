<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Adldap\Laravel\Facades\Adldap;
use Adldap\AdldapInterface;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    protected $ldap;
    public function __construct(AdldapInterface $ldap)
    {
        $this->middleware('auth');
        $this->ldap = $ldap;
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = $this->ldap->search()->users()->get();
        // return $users;
        return view('home',compact('users'));
    }
}
