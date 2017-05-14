<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class LandingController extends Controller
{

  public function __construct() {
    //  $sections = [];
       //View::share( 'sections', $sections );
    }

    public function renderDefault(){
      $sede = new \stdClass();
      $sede->nombre = "Caballito";
      return view('landing.index', compact('sede'));
    }


    public function render($sede){
      $sede = new \stdClass();
      $sede->nombre = "Caballito";
      return view('landing.index', compact('sede'));
    }

    public function setContacto(Request $request)
    {
      $contact = new Contact($request->all());
      $contact->save();
      return response()->json([
        'name' => $contact->name,
      ]);
    }
}
