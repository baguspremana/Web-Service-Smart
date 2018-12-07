<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User; 
use Illuminate\Support\Facades\Auth; 
use Validator;

class PassportController extends Controller
{
    public $successStatus = 200;

    public function register(Request $request)
    {
    	$validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);
	
		if ($validator->fails()) {
            return response()->json([
            	'success' => false,
            	'error'=>$validator->errors()
            ], 401);            
        }

        $input = $request->all();
        $input['password'] = bcrypt($input['password']);
        $user = User::create($input);
        $success['id'] = $user->id;
        $success['name'] =  $user->name;
        $success['email'] = $user->email;

        return response()->json(['success'=>$success], $this->successStatus);
    }

    public function login(Request $request)
    {
    	if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
            $user = Auth::user();
            $token =  $user->createToken('MyApp');
            $user->token = $token->accessToken;

            return response()->json($user, $this->successStatus);

        }else{

            return response()->json(['error'=>'Unauthorised'], 401);
        }
    }

    public function profile()
    {
    	$user = request()->user();

    	return $user;
    }
}
