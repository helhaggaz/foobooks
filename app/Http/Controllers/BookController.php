<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return 'Listing of all books !!';
    }
    public function show($title ='')
    {
          if($title == '') {
              return 'Your request did not include a title.';
          }
          else {
      	    return 'Results for the book: '.$title;
          }
    }
}
