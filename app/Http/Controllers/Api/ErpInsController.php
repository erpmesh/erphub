<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Chrisbjr\ApiGuard\Http\Controllers\ApiGuardController;

class ErpInsController extends ApiGuardController
{
    public function all()
    {
        $books = Book::all();

        return $this->response->withCollection($books, new BookTransformer);
    }

    public function show($id)
    {
        try {

            $book = Book::findOrFail($id);

            return $this->response->withItem($book, new BookTransformer);

        } catch (ModelNotFoundException $e) {

            return $this->response->errorNotFound();

        }
    }
}