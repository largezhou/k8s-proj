<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TestLoadBalanceController extends Controller
{
    public function test(Request $request)
    {
        Log::channel('test_lb')->info(gethostname().$request->input('batch'));
    }
}
