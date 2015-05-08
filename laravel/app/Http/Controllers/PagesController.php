<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function about(){
    /*$name = 'Francis <span style="color: #000018;"> Tuquib</span>';

    return view('pages.about')->with('name', $name);*/
    //-------------------------------------------------
    /*return view('pages.about')->with([

      'first' => 'Francis',
      'second' => 'Tuquib'
    ]);*/
    //-------------------------------------------------
    /*$data = [];
    $data['first'] = 'Francis';
    $data['second'] = 'Tuquib';

    return view('pages.about', $data);*/
    //-------------------------------------------------
    /*$first = 'Francis';
    $second = 'Tuquib';

    return view('pages.about', compact('first', 'second'));*/
    //-------------------------------------------------
    $messages = [

      'Message 1', 'asd', 'This is the third message'
    ];
      return view('pages.about', compact('messages'));
  }

  public function contact(){

    return view('pages.contact');
  }

}
