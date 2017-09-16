<?php

namespace Wnx\DisableUpdatedAt\Tests\Stubs;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    public static function testStub()
    {
        $post = new self;
        $post->title = 'Rick and Morty';
        $post->content = 'wubba lubba dub dub';
        $post->save();

        return $post;
    }

}