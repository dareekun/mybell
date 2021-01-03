<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Auth;
use File;

class AdminController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('auth');
    }

    // Function For Audio Change
    public function changes() 
    {
        return view('change_sound');
    }

    // Proccessing Audio Change
    public function audio_change(Request $request) {
        $file = $request->file;
        $tujuan_upload = 'sound';
        $file->move($tujuan_upload, sprintf("%02d", $request->idsound).'.ogg');
        return redirect('changes')->with('status', 'File Has been uploaded successfully');
    }

    public function changep() 
    {
        return view('auth.passwords.change');
    }

    public function newpassword(Request $request) {
        $a1 = Auth::user();
        if (Hash::check($request->oldpassword, $a1->password)) {
            DB::table('users')->where('email', $a1->username)->update(
                [
                    'password' => bcrypt($request->password1),
                ]
                
            );
            $errors = ['oldpass' => ['Password Berhasil Dirubah']]; 
            return Redirect::back()->withErrors($errors);
        }
        else {
            $errors = ['oldpass' => ['Password Salah']]; 
            return Redirect::back()->withErrors($errors);
        }
    }

}