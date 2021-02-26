<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Validator,Redirect,Response,File;
use Illuminate\Support\Facades\Cookie;

class ProfileController extends Controller
{
    // profile is accessible only to logged in user
    public function __construct()
    {
        $this->middleware('auth');
    }

    // profile form page
    public function profile()
    {
        $date_sec = strtotime(\Auth::user()->created_at);
        $date_arr = getdate($date_sec);
        return view('user.profile')->with(['date_arr' => $date_arr]);
    }

    // edit profile page
    public function editProfile()
    {
        $user = \Auth::user();
        $date_sec = strtotime(\Auth::user()->created_at);
        $date_arr = getdate($date_sec);
        $profile = getProfiles($user->id);
        $states = parseJsonFile();
        $selected_state = (Cookie::get('state')) ? Cookie::get('state') : $profile['state'];
        return view('user.edit_profile')->with(['user' => $user, 'date_arr' => $date_arr, 'profile' => $profile, 'states' => $states, 'selected' => $selected_state]);
    }

    public function updateProfile(Request $request)
    {
        $user = \Auth::user();
        $data = $request->all();

        if(isset($data['form1'])) {
            \DB::table('profiles')->where('user_id', $user->id)
                ->update([
                    'phone1' => $data['phone_number'],
                    'address1' => $data['address1'],
                    'address2' => $data['address2'],
                    'city' => $data['city'],
                    'state' => $data['state'],
                    'zip' => $data['zip'],

                ]);
        }else if ($data['form2']) {
            $this->updatePassword($data, $user->id);
        }

        $profile = getProfiles($user->id);
        if (!$profile['state'] and !Cookie::has('state') and $data['state'] == '') {
            $selected_state = '';
        } else if (!$profile['state'] and $data['state'] and !Cookie::get('state')) {
            Cookie::queue(Cookie::make('state', $data['state']));
        } else if ($profile['state'] and !isset($data['state']) and !Cookie::get('state')) {
            Cookie::queue(Cookie::make('state', $data['state']));
        } else if ($profile['state'] and !isset($data['state'])  and  Cookie::get('state')) {
            Cookie::forget('state');
            Cookie::queue(Cookie::make('state', $profile['state']));
        } else if ($profile['state'] and ($profile['state'] === $data['state'])) {
            Cookie::queue(Cookie::make('state', $data['state']));
        }
        // get state cookie and assign to variable
        $selected_state = (Cookie::get('state') and  !isset($data['state'])) ? Cookie::get('state') : $data['state'];
        $date_sec = strtotime(\Auth::user()->created_at);
        $date_arr = getdate($date_sec);
        $states = parseJsonFile();
        return view('user.edit_profile')->with(['user' => $user, 'date_arr' => $date_arr, 'profile' => $profile, 'states' => $states, 'selected' => $selected_state]);
    }

    public function updatePassword($data, $id)
    {
        $user = User::find($id);
        $hasher = app('hash');
        if($hasher->check($data['current_password'], $user->password)) {
            if($data['new_password'] === $data['confirm_password'])
            \DB::table('users')->where('id', $user->id)
                ->update([
                    'password' => $hasher->make($data['new_password'])
                ]);
        }

    }

    public function updateAvatar(Request $request) {
        $request->validate([
            'avatar_file' => 'required|image|mimes:jpeg,png'
        ]);

        $imageName = $request->file('avatar_file');

        $request->file('avatar_file')->store(md5($request->user()->email));

        return back()->with('success', 'Upload successful')
            ->with('image', $imageName);

    }
}
