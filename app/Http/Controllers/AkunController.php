<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Akun;
class AkunController extends Controller
{
    public function getAkun($email){
        $akun = Akun::where('email', $email)->first();
        if(!$akun){
            return $akun;
        }else{
            $akun->email = $email;
            $akun->save();

            return $akun;
        }
    }
    
    public function index($limit){
        return Akun::paginate($limit);
    }
}
