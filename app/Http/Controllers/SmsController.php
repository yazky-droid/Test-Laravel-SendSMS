<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SmsController extends Controller
{
    public function index(Request $request)
    {
        Nexmo::message()->send([
            'to' => $request->receiver,
            'from' => $request->sender,
            'text' => $request->text
        ]);

        return response()->json(
            [
                'message' => 'Send SMS Success, Thanks!'
            ]);
    }
}
