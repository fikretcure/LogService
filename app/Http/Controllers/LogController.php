<?php

namespace App\Http\Controllers;

use App\Jobs\LogJob;
use App\Models\Log;
use Illuminate\Http\Request;

class LogController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        LogJob::dispatch($request->toArray());
        return true;
    }
}
