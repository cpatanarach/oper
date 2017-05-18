<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ViewController extends Controller
{
    public function home(){
    	return view('welcome');
    }
    public function mainRoom(){
    	return view('mainRoom');
    }
    public function serverRoom(){
    	return view('serverRoom')->with('serverRoom','1');
    }
    public function networkRoom(){
    	return view('networkRoom')->with('networkRoom','1');
    }
    public function backupRoom(){
    	return view('backupRoom')->with('backupRoom','1');
    }
    public function controlRoom(){
    	return view('controlRoom')->with('controlRoom','1');
    }
    public function airControlRoom(){
        return view('airControlRoom')->with('airControlRoom','1');
    }
    public function upsRoom(){
        return view('upsRoom')->with('upsRoom','1');
    }
    public function fm200(){
        return view('fm200')->with('fm200','1');
    }
    public function surgeProtection(){
        return view('surgeProtection')->with('surgeProtection','1');
    }
    public function electricSystem(){
        return view('electricSystem')->with('electricSystem','1');
    }
    public function pingToClient($ip){
    	exec("ping -n 3 $ip", $output, $status);
    	return $output[1].'<br>'.$output[2].'<br>'.$output[3].'<br>'.$output[4].'<br>'.$output[4].'<br>'.$status;
    }
}
