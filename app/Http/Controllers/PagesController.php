<?php namespace App\Http\Controllers;

use App\Page;

class PagesController extends Controller {

  public function show($id)
  {
       $page = Page::find($id);
       if(is_null($page)){
           abort(404);
       }    
	return view('pages.show')->withPage($page);
  }

}
