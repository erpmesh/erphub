<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;

class TriggerController extends ApiGuardController
{
    public function index()
    {
        $books = Book::all();

        return $this->response->withCollection($books, new BookTransformer);
    }
    public function submit()
    {
        $books = Book::all();

        return $this->response->withCollection($books, new BookTransformer);
    }
}

//curl -X GET localhost/erpmesh/erphub/public/api/v1/trigger

//curl -X PUT -d arg=val localhost