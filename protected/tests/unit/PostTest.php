<?php

class PostTest extends CDbTestCase 
{
    public function testCRUD()
    {
        $newPost = new Post();
        $newPostTitle = 'Test Post 1';
        $newPost->setAttributes(array(
            'title' => $newPostTitle,
            'content' => 'something...',
            'create_time' => date('Y-m-d H:i:s'),
            'create_user_id' => 1,
            'update_time' => date('Y-m-d H:i:s'),
            'update_user_id' => 1,
        ));
        $this->assertTrue($newPost->save(false));
        
        $retrievedPost = Post::model()->findByPk($newPost->id);
        $this->assertTrue($retrievedPost instanceof Post);
        $this->assertEquals($newPostTitle, $retrievedPost->title);
        
        $updatedPostTitle = 'Updated Test post 1';
        $newPost->title = $updatedPostTitle;
        $this->assertTrue($newPost->save(false));
        
        $updatedPost = Post::model()->findByPk($newPost->id);
        $this->assertTrue($updatedPost instanceof Post );
        $this->assertEquals($updatedPostTitle, $updatedPost->title);
        
        $newPostId = $newPost->id;
        $this->assertTrue($newPost->delete());
        $deletedPost = Post::model()->findByPk($newPostId);
        $this->assertEquals(null, $deletedPost);
    }
}