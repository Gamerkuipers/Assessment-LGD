<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\View\View;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        $users = User::all();
        return View('user.list', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('user.sign-up');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreUserRequest  $request
     * @return Response
     */
    public function store(StoreUserRequest $request)
    {

        $validated = $request->validated();

        $postal = $request->get('postal_code');
        $houseNumber = $request->get('house_number');

        $response = Http::spikkl($postal, $houseNumber);

        // Unable to get the correct response
//        dd($response);
//        if($response) return

        $user = new User;

        $initials = $validated['initials'];
        $firstName = $validated['first_name'];

        if(substr($initials,0,1) != substr($firstName,0,1)) return back()->withErrors('initials','First letter does not equal firstname letter.');

        $user->first_name = $firstName;
        $user->surname = $validated->get('surname');
        $user->initials = $validated->get('initials');
        $user->postal_code = $postal;
        $user->house_number = $houseNumber;

        $user->save();
    }
}
