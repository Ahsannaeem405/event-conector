<?php

namespace App\Http\Controllers;

use App\Models\note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NoteController extends Controller
{
   public function store(Request $request,note $note){

       $note->note=$request->note;
       $note->booking_id=$request->booking_id;
       $note->user_id=Auth::user()->id;
       $note->save();

       return back()->with('success','Note created successfully');
   }
   public function delete($id,note $note)
   {
       $note->findOrFail(decrypt($id))->delete();
       return back()->with('success','Note deleted successfully');

   }
}
