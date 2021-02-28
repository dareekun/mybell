<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

use Auth;
use File;
Use Redirect;

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

    // Proccessing Schedule Exclude Change
    public function exclude_change(Request $request) {
        // write the time to the end of the file
        $myfile2 = fopen("schedule/EXCLUDE.txt", "w") or die("Unable to open file!");
        $date       = $request->dateNow;
        $tanggal    = date('d-m-Y', strtotime($date));
        $res = preg_replace("/[^a-zA-Z0-9]/", "", $tanggal);
        $txt = $res;
        fwrite($myfile2, $txt);
        fclose ($myfile2);
        $errors = ['oldpass' => ['Edit Exclude Date Successfull']]; 
        return Redirect::back()->withErrors($errors);
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
            if ($a1->password == $request->password1) {
                DB::table('users')->where('email', $a1->email)->update(
                    [
                        'password' => bcrypt($request->password1),
                    ]
                    
                );
                $errors = ['oldpass' => ['Password Change Successfull']]; 
                return Redirect::back()->withErrors($errors);
            } else {
                $errors = ['oldpass' => ['Password Not Same']]; 
                return Redirect::back()->withErrors($errors);
            }
        }
        else {
            $errors = ['oldpass' => ['Password Wrong']]; 
            return Redirect::back()->withErrors($errors);
        }
    }

    public function process(Request $request){
        if ($request->trueType == 'Friday') {
            $files = 'schedule/Friday_'.$request->idAlarm.".txt";
        } else {
            $files = 'schedule/PLAY_'.$request->idAlarm.".txt";
        }
        switch ($request->typeProses) {
            // Delete
            case "Delete":
                $Time  = $request->Time;
                $lines = file($files);
                $key   = preg_replace("/[^a-zA-Z0-9]/", "", $Time)."|\n";
                $id    = array_search($key, $lines);
                unset($lines[$id]); 
                natsort($lines);
                $myfile = fopen($files, "w") or die("Unable to open file!");
                file_put_contents($files, implode($lines));
                fclose ($myfile);
                $errors = ['oldpass' => ['Delete Schedule Success']]; 
                return Redirect::back()->withErrors($errors);
            // Edit
            case "Edit":
                $Time  = $request->whenEdit;
                $lines = file($files);
                $key   = preg_replace("/[^a-zA-Z0-9]/", "", $Time)."|\n";
                $id    = array_search($key, $lines);
                unset($lines[$id]); 
                natsort($lines);
                $myfile = fopen($files, "w") or die("Unable to open file!");
                file_put_contents($files, implode($lines));
                fclose ($myfile);
                // Reopen Malas
                $myfile = fopen($files, "a") or die("Unable to open bell times file!");
                $res = preg_replace("/[^a-zA-Z0-9]/", "", $request->Time);
                $len  = strlen($res); 
                    if ($len == 4) {
                        $txt = $res. "00|";
                    }
                    else {
                        $txt = $res. "|";
                    }
                fwrite($myfile, $txt. "\n");
                $lines = file($files);
                natsort($lines);
                file_put_contents($files, implode($lines));
                fclose ($myfile);
                $errors = ['oldpass' => ['Edit Schedule Success']]; 
                return Redirect::back()->withErrors($errors);
            // Add
            case "Add":
                $myfile = fopen($files, "a") or die("Unable to open bell times file!");
                $res = preg_replace("/[^a-zA-Z0-9]/", "", $request->Time);
                $len  = strlen($res); 
                    if ($len == 4) {
                        $txt = $res. "00|";
                    }
                    else {
                        $txt = $res. "|";
                    }
                fwrite($myfile, $txt. "\n");
                $lines = file($files);
                natsort($lines);
                file_put_contents($files, implode($lines));
                fclose ($myfile);
                $errors = ['oldpass' => ['Add Schedule Success']]; 
                return Redirect::back()->withErrors($errors);
            // Error
            default:
                $errors = ['oldpass' => ['Error Controller, Looks like Process Type No Recognize']]; 
                return Redirect::back()->withErrors($errors);
          }
    }

}