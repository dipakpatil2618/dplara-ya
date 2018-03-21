<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('account.account');
    }
    public function favorites()
    {
        return view('account.favorites');
    }
     public function savedsearches()
    {
        return view('account.savedsearches');
    }

    public function cmareports()
    {
        return view('account.cmareports');
    }
     public function vendors()
    {
        return view('account.vendors');
    }

     public function settings()
    {
        return view('account.settings');
    }

     public function password()
    {
        return view('account.password');
    }

    public function changePassword(Request $request){
        $passwordData = $request->all();
        $currPassword = $passwordData['current_password'];
        $newPassword = $passwordData['new_password'];
        $id = Auth::id();
        $userDetail = User::find($id);
        if(count($userDetail)){
            if (!Hash::check($currPassword, $userDetail->password)) {
                $request->session()->flash('message.level', 'danger');
                $request->session()->flash('message.content', 'old password not matched');
                return view('account.password');
            }
            $userDetail->password = Hash::make($newPassword);
            if(!$userDetail->save()){
                $request->session()->flash('message.level', 'danger');
                $request->session()->flash('message.content', 'Problem in changing password');
                return view('account.password');
            }
        }
        $request->session()->flash('message.level', 'success');
        $request->session()->flash('message.content', 'Password changed successfully');
        return view('account.password');

        
    }
    




    
    
}
