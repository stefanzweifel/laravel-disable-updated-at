<?php

namespace Wnx\DisableUpdatedAt\Tests;

use Illuminate\Database\QueryException;
use Orchestra\Testbench\TestCase;
use Wnx\DisableUpdatedAt\Tests\Stubs\Post;
use Wnx\DisableUpdatedAt\Tests\Stubs\User;

class DisableUpdatedAtTest extends TestCase
{
    use CreateApplication;

    /** @test */
    public function it_creates_a_new_user_model()
    {
        $user = User::testStub();

        $this->assertEquals(1, $user->id);
    }

    /** @test */
    public function it_does_not_throw_an_exeption_if_user_is_updated()
    {
        $user = User::testStub();

        $user->update(['name' => 'Morty']);

        $this->assertEquals('Morty', $user->fresh()->name);
    }

    /** @test */
    public function it_throws_an_exception_if_a_new_post_is_created_without_using_the_trait()
    {
        $this->expectException(QueryException::class);

        $post = Post::testStub();
    }

    /** @test */
    public function it_throws_an_exception_if_post_is_updated_but_does_not_have_an_updated_at_column_and_does_not_use_the_trait()
    {
        $this->expectException(QueryException::class);

        $post = Post::testStub();

        $post->update(['content' => "I'm alive!"]);
    }

    /** @test */
    public function it_returns_an_empty_string_for_updated_at_column()
    {
        $user = User::testStub();

        $this->assertEquals('', $user->getUpdatedAtColumn());
    }

}
