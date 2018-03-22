<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Adldap\Laravel\Facades\Adldap;
use Adldap\AdldapInterface;
use Adldap\UserResolver;

class SearchController extends Controller
{
    protected $ldap;
    
    /**
     * Constructor.
     *
     * @param AdldapInterface $adldap
     */
    public function __construct(AdldapInterface $ldap)
    {
        $this->ldap = $ldap;
    }

    public function search(Request $request)
    {
    	$id = $request->input('username');
    	$user = $this->ldap->search()->where('uid','=',$id)->get();
    	return json_encode($user);
    }
}
