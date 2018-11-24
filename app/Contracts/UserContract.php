<?php 
namespace App\Contracts;

use Illuminate\Http\Request;

interface UserContract
{

  public function signUp(Request $request);

}
