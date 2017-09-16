<?php

namespace Wnx\DisableUpdatedAt\Tests\Stubs;

use Illuminate\Database\Eloquent\Model;
use Wnx\DisableUpdatedAt\DisableUpdatedAt;

class User extends Model
{
    use DisableUpdatedAt;

    protected $fillable = ['name', 'password'];



    public static function testStub()
    {
        $user = new self;
        $user->name = 'Foo';
        $user->email = 'foo@bar.com';
        $user->password = bcrypt('secret');
        $user->save();

        return $user;
    }



}