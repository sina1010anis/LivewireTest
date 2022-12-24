<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public User $user;
    public $status = false;
    public function index(){
        return view('welcome');

    }
    public function axios()
    {
        if($this->status){
            $this->status = false;
            return 'true';
        }else{
            $this->status = true;
            return 'false';
        }
    }
    public function bach(){
        return $this->user;
    }
}
