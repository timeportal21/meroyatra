<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
	public function login(Request $request)
	{
		$login = $request->validate([
			'email' => "required|email",
			'password' => 'required'
		]);
		if (!Auth::attempt($login)) {
			return response(['message' => 'Invalid Login credentials']);
		}
		$accessToken = \auth()->user()->createToken('authToken')->accessToken;
		return response([
			'user' => \auth()->user(),
			'access_token' => $accessToken
		]);
	}

	public function logout(Request $request)
	{
		$token = $request->user()->token();
		$token->revoke();
		return response([
			'message' => 'Logout successfully'
		], 200);
	}

	protected function sendResetLinkResponse(Request $request, $response)
	{
		$response = ['message' => "Password reset email sent"];
		return response($response, 200);
	}

	protected function sendResetLinkFailedResponse(Request $request, $response)
	{
		$response = "Email could not be sent to this email address";
		return response($response, 500);
	}
}
