<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Route;

class JITController extends Controller
{
    //
    function guidelines()
    {

        return view('JIT.guidelines');
    }

    function editorialBoard($slug)
    {

        $journal = DB::table('journals')->where('slug', $slug)->first();

        $Chief_editors = DB::table('editors_data')->select(['image', 'name', 'university', 'details', 'profile'])
            ->where('type', '=', 'Chief Editor')
            ->where('j_id', '=', $journal->j_id)
            ->where('active', '=', 1)
            ->get();

        $ass_editors = DB::table('editors_data')->select(['image', 'name', 'university', 'details', 'profile'])
            ->where('type', '=', 'ass')
            ->where('j_id', '=', $journal->j_id)
            ->where('active', '=', 1)
            ->get();

        return view('JIT.editorial-board', ['Chief_editors' => $Chief_editors, 'ass_editors' => $ass_editors]);
    }


    function indexedAbstract($slug)
    {
        $journal = DB::table('journals')->where('slug', $slug)->first();
        $indexing = DB::table('indexing')
            ->where('j_id', '=', $journal->j_id)
            ->get();

        return view('JIT.indexed-abstract', ['indexing' => $indexing]);
    }

    function archive($slug)
    {
        $journal = DB::table('journals')->where('slug', $slug)->first();
        $volumes = DB::table('volume')->where('j_id', $journal->j_id)->orderByDesc('name')->get();

        return view('JIT.archive', ['volumes' => $volumes]);
    }


    function issues($slug, $vol = null)
    {
        $routeName = Route::currentRouteName();

        // return $routeName;
        $journal = DB::table('journals')
            ->where('slug', $slug)
            ->first();

        if (!$journal) {
            abort(404, "Journal not found");
        }


        // for archive 
        if ($routeName == 'issues.all') {

            $volume = DB::table('volume')
                ->where('short', $vol)
                ->where('j_id', $journal->j_id)
                ->first();

            if (!$volume) {
                abort(404, "Volume not found");
            }

            $issues = DB::table('issues')
                ->where('v_id', $volume->id)
                ->get();

        } else {
            // for current issue 
            $volume = DB::table('volume')
                ->where('j_id', $journal->j_id)
                ->orderByDesc('name')
                ->first();

            $issues = [DB::table('issues')
                ->where('v_id', $volume->id)
                ->get()
                ->last()];


        }

        // return $issues[0];
        if(!$issues[0]){
            return view('JIT.articles', ['issues' => [], 'volume' => $volume->name]);
        }


        $result = [];

        foreach ($issues as $issue) {
            // Fetch all articles under this issue
            $articles = DB::table('article')
                ->where('i_id', $issue->id)
                ->where('j_id', $journal->j_id)
                ->get();

            // if ($articles->isNotEmpty()) {
            $result[] = [
                'issue' => $issue,
                'articles' => $articles,
            ];
            // }
        }

        // return $result;
        return view('JIT.articles', ['issues' => $result, 'volume' => $volume->name]);
    }




    function aboutUs(Request $request, $id)
    {

        return view('JIT.about');
    }
    function view($slug)
    {
        $article = DB::table('article')
            ->join('issues', 'issues.id', '=', 'article.i_id')
            ->join('volume', 'volume.id', '=', 'issues.v_id')
            ->join('journals', 'journals.j_id', '=', 'volume.j_id')
            ->where('article.slug', $slug)
            ->select('*', 'article.name as name', 'article.id as airticle_id')
            ->first();

        return view('JIT.viewArticle', ['article' => $article]);
    }
}
