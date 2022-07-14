<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Identity\identityClient;
use Identity\ValidateTokenReq;
use Illuminate\Foundation\Auth\VerifiesEmails;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('signed')->only('verify');
//        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function grpc()
    {
        $host = '127.0.0.1:9001';
        $client = new identityClient($host,[
            'credentials' => \Grpc\ChannelCredentials::createInsecure(),
        ]);
        $token = 'world';
        $request = new ValidateTokenReq();
        $request->setToken($token);

        $call = $client->validateToken($request);
        list($response, $status) = $call->wait();
        print_r($status);exit;
//        var_dump('message = '.$response->getMessage());
    }
}
