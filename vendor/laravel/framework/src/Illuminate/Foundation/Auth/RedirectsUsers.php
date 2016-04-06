<?php

namespace Illuminate\Foundation\Auth;
use App\User;
use Auth;
trait RedirectsUsers
{
    /**
     * Get the post register / login redirect path.
     *
     * @return string
     */
    public function redirectPath()
    {
        if (property_exists($this, 'redirectPath')) {
            return $this->redirectPath;
        }
       
	 return property_exists($this, 'redirectTo') ? $this->redirectTo : '/auth/login';
      
	
    }
}
