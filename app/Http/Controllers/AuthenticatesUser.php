<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use App\User;
use Auth;

class AuthenticatesUser extends Controller
{
    use ValidatesRequests;

    protected $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function login() {
        $user = User::where('number', $this->request->number)->firstOrFail();
        Auth::login($user);

        redirect('shopfloor');
    }

    public function validation() {    
        $this->validateRequest();
    }

    protected function validateRequest() {
        $this->validate($this->request, [
            'number' => 'required|exists:users'
        ]);

        return $this;
    }
}
