<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use App\Models\ProfileType;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client as Client;

class ProfileController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('guest');
    // }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'profile_type_id' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'street' => 'required',
            'zipcode' => 'required',
            'image' => ['required', 'image'],
        ]);

        if(auth()->user()->profile == null){
            auth()->user()->profile()->create($data);
            request('image')->store('uploads', 'public');
        }
        else {
            auth()->user()->profile()->update($data);
            request('image')->store('uploads', 'public');
            
        }

        return redirect()->back()->with('success', 'Profile Updated');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        // return auth()->user()->profile;
        $user = Auth::user()->profile;
        $roles = ProfileType::all(); 
        $client = new Client();
        $endpoint_countries = 'https://restcountries.eu/rest/v2/all';
        $get_countries = $client->request('GET', $endpoint_countries);
        $countries = json_decode($get_countries->getBody());
        // $profile = Profile::find($id);
        // return $id;
        return view('dashboard.profile.index', [
            'user' => $user,
            'countries' => $countries,
            'roles' => $roles
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
