<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TestFeedController extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicFeed()
    {
        $this->post('/user', ['name' => 'Sally'])
            ->seeJson([
                'created' => true,
            ]);
    }
}