<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JITController extends Controller
{
    //
    function guidelines(){

        return view('JIT.guidelines');
    }

    function editorialBoard(){
        return view('JIT.editorial-board');
    }


    function indexedAbstract(){

        return view('JIT.indexed-abstract');
    }

    function aboutUs(Request $request, $id){



        // $Journal_details = journal::select(['j_name', 'j_id', 'abbr_title', 'issn', 'frequency', 'subject', 'format', 'language', 'chief_editor', 'publisher', 'country_of_origin', 'aim_and_scope'])
        //     ->where('j_id', strip_tags($id))
        //     ->first();


        // $Chief_editors = editor_data::select(['image', 'name', 'university', 'details', 'profile'])
        //     ->where('type', '=', 'chief')
        //     ->where('j_id', '=', $id)
        //     ->where('active', '=', 1)
        //     ->get();


        // $ass_editors = editor_data::select(['image', 'name', 'university', 'details', 'profile'])
        //     ->where('type', '=', 'ass')
        //     ->where('j_id', '=', $id)
        //     ->where('active', '=', 1)
        //     ->get();

        return view('JIT.about');
    }
}
