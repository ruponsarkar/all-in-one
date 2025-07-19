<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Hash;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Carbon;

class ManuscriptController extends Controller
{
    public function __construct()
    {
        if (!auth()->check()) {
            $token = request()->cookie('jwt_token');
            if ($token) {
                try {
                    JWTAuth::setToken($token)->authenticate();
                } catch (\Exception $e) {
                    // Token may be expired or invalid — optionally log or ignore
                }
            }
        }
    }

    function user_register(Request $request)
    {
        $validatedData = $request->validate([
            'first_name' => 'required|string|max:255',
            // 'middle_name'  => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'university' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:5|same:re_password',
            're_password' => 'required|string|min:5',
            // 'captcha'    => 'required|captcha', // if using real captcha
        ], [
            'password.same' => 'Password and Repeat Password must match.',
        ]);

        // You can proceed to create a user here
        $user = User::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'university' => $request->university,
            'department' => $request->department,
            'city' => $request->city,
            'country' => $request->country,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);



        $token = JWTAuth::fromUser($user);

        // return response()->json(compact('user', 'token'), 201);
        return redirect()->back()->with('success', 'Registration successful!');

    }


    // public function login(Request $request)
    // {
    //     $credentials = $request->only('email', 'password');

    //     if (!$token = JWTAuth::attempt($credentials)) {
    //         return response()->json(['error' => 'Invalid Credentials'], 401);
    //     }

    //     session(['jwt_token' => $token]);

    //     return redirect('/user-dashboard');
    // }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return back()->with('error', 'Invalid Credentials');
        }

        // Store JWT token in a secure cookie (expires in 7 days)
        $cookie = Cookie::make('jwt_token', $token, 60 * 24 * 7); // 7 days

        return redirect('/user-dashboard')->withCookie($cookie);
    }


    public function profile()
    {
        return response()->json(auth()->user());
    }

    // public function logout()
    // {
    //     try {
    //         JWTAuth::setToken(session('jwt_token'))->invalidate();
    //     } catch (\Exception $e) {
    //     }

    //     session()->forget('jwt_token');

    //     return redirect('/')->with('message', 'Logged out successfully');
    // }

    public function logout()
    {
        try {
            JWTAuth::setToken(session('jwt_token') ?? request()->cookie('jwt_token'))->invalidate();
        } catch (\Exception $e) {
            // already invalid
        }

        session()->forget('jwt_token');

        // Clear the cookie
        $cookie = Cookie::forget('jwt_token');

        return redirect('/')->with('message', 'Logged out successfully')->withCookie($cookie);
    }



    function dashboard()
    {
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Not Authenticated or Session Expired');
        }

        $userId = auth()->user()->id;

        // Get all submissions by user
        $submissions = DB::table('submissions')
            ->where('submissions.user_id', $userId)
            ->where('submissions.status', 'Active')
            ->orderBy('submissions.id', 'desc')
            ->get();

        $submissionIds = $submissions->pluck('id');

        // Get all related statuses
        $statuses = DB::table('submissions_status')
            ->whereIn('submission_id', $submissionIds)
            ->get()
            ->groupBy('submission_id');

        // Attach status history and extract msid from the first status
        $submissions = $submissions->map(function ($submission) use ($statuses) {
            $submission->statuses = $statuses->get($submission->id, collect())->values();

            // Attach msid from first status entry if exists
            if ($submission->statuses->isNotEmpty()) {
                $submission->msid = $submission->statuses->first()->msid ?? null;
            } else {
                $submission->msid = null;
            }

            return $submission;
        });

        return view('JIT.manuscript.user-dashboard', ['submissions' => $submissions]);
    }



    function submission(Request $request)
    {
        if (!auth()->check()) {
            return redirect('/login')->with('error', 'Not Authenticated or Session Expired');
        }

        $validatedData = $request->validate([
            'author_name' => 'required|string|max:255',
            'paper_title' => 'required|string',
            'keywords' => 'required|string',
            'abstract' => 'required|string',
            'corresponding_email' => 'required|email',
            'file' => 'required|mimes:pdf,doc,docx'
        ]);

        $namewithextension = $request->file->getClientOriginalName();
        $fileOriginalName = explode('.', $namewithextension)[0].'.' . $request->file->extension();
        $fileName = time() . '.' . $request->file->extension();
        $request->file->move(base_path('public/assets/submissions'), $fileName);

        $user_id = auth()->user()->id;
        $author_name = $request->author_name;
        $paper_title = $request->paper_title;
        $keywords = $request->keywords;
        $abstract = $request->abstract;
        $corresponding_email = $request->corresponding_email;
        // $file = $fileOriginalName;

        $id = DB::table('submissions')->insertGetId([
            'user_id' => $user_id,
            'author_name' => $author_name,
            'paper_title' => $paper_title,
            'keywords' => $keywords,
            'abstract' => $abstract,
            'corresponding_email' => $corresponding_email,
            'file' => $fileName,
            'file_original_name' => $fileOriginalName,
            'status' => 'Active'
        ]);

        $msid = 'JIT' . '00' . $user_id . '-00' . $id;

        DB::table('submissions_status')->insert([
            'submission_id' => $id,
            'msid' => $msid,
            'status' => 'Pending',
            'date' => date('d-m-Y', strtotime(Carbon\Carbon::now())),
            'updated_by' => ''
        ]);

        return redirect('/user-dashboard?page=articles')->with('success', 'Submitted Successfully');

    }


    function allSubmissions(Request $request)
    {
        $page = $request->query('page', 1);     // Default to 1 if not provided
        $limit = $request->query('limit', 10);  // Default to 10 if not provided
        $offset = ($page - 1) * $limit;

        // Subquery to get latest status for each submission
        $latestStatusSubquery = DB::table('submissions_status as ss1')
            ->select('ss1.*')
            ->join(
                DB::raw('(SELECT submission_id, MAX(id) as max_id FROM submissions_status GROUP BY submission_id) as ss2'),
                function ($join) {
                    $join->on('ss1.submission_id', '=', 'ss2.submission_id')
                        ->on('ss1.id', '=', 'ss2.max_id');
                }
            );

        // Join submissions with latest statuses
        $submissions = DB::table('submissions')
            ->joinSub($latestStatusSubquery, 'latest_status', function ($join) {
                $join->on('submissions.id', '=', 'latest_status.submission_id');
            })
            ->where('submissions.status', 'Active')
            ->select('submissions.*', 'latest_status.status as submission_status', 'latest_status.article_link', 'latest_status.date as date', 'latest_status.msid as msid')
            ->orderBy('submissions.id', 'desc')
            ->offset($offset)
            ->limit($limit)
            ->get();

        // Total count of submissions with status 'Active'
        $total = DB::table('submissions')
            ->where('status', 'Active')
            ->count();

        return response()->json([
            'total' => $total,
            'page' => $page,
            'limit' => $limit,
            'submissions' => $submissions,
        ]);
    }


    function addSubmissionStatus(Request $request)
    {

        $status = $request->status;
        $articleLink = $request->articleLink;
        $id = $request->id;

        $data = DB::table('submissions_status')->where('submission_id', $id)->first();

        $check_status = DB::table('submissions_status')->where('submission_id', $id)->where('status', $status)->first();

        if ($check_status) {
            return response()->json([
                'status' => 'error',
                'message' => 'Status is already there',
            ]);
        }

        // $save = new $data;

        DB::table('submissions_status')->insert([
            'submission_id' => $data->submission_id,
            'msid' => $data->msid,
            'status' => $status,
            // 'article_link' => $articleLink == "Published" ? $articleLink : $data->article_link,
            'article_link' => $status === "Published" ? $articleLink : $data->article_link,
            'date' => date('d-m-Y', strtotime(Carbon\Carbon::now())),
            'updated_by' => $request->updated_by || null
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Status Updated Successfully',
        ]);

    }




}
