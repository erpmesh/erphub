<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Response;

class FeedController extends ApiGuardController
{
    public function test()
    {
        return response()->json(['success' => true]);
    }
    public function submit()
    {
        $payload = Input::json();

        Log::info('payload: '.var_export($payload,true));

    }
}

//curl -X PUT -d arg=val localhost/erpmesh/erphub/public/api/v1/feed

//curl -X PUT -d arg=val localhost