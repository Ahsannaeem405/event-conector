<?php

namespace App\Http\Controllers;

use App\Events\BraodCast;
use Illuminate\Http\Request;

class MessageController extends Controller
{
   public function send(Request $request)
   {
       event(new BraodCast($request));
   }
}
