<?php

use Acme\Aspect\Post;
use Acme\Doubles\UserModel;
use AspectMock\Test;
use Laracasts\Integrated\Extensions\Goutte;

require_once 'aspect.php';
/**
 * PostsTest
 *
 * @group group
 */
class PostsTest extends Goutte
{
    public function tearDown()
    {
        Test::clean();
    }
    /** @test **/
    public function it_checks_the_aspect_mock_work()
    {
        $this->assertEquals('users', UserModel::tableName());
        $userModel = test::double('Acme\Doubles\UserModel', ['tableName' => 'my_users']);
        $this->assertEquals('my_users', UserModel::tableName());
        $userModel->verifyInvoked('tableName');

    }
     /** @test **/ 
	function it_checkes_if_my_class_are_mocked()
	{
          $this->assertEquals('posts', Post::all());
          $posts = test::double('Acme\Aspect\Post', ['all' => 'my_posts']);
          $this->assertEquals('my_posts', Post::all());		
	}
}
