<?php

namespace app\models;

use app\components\NewCommentEvent;
use yii\base\Model;

/**
 * Post is the model behind each post in the blog.
 */
class Post extends Model
{
    public $id;
    public $name;
    public $body;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return array(
            // name, body are required
            array('name, body', 'required'),
        );
    }

    public function addComment(Comment $comment)
    {
        $comment->post_id = $this->id;

//        create event class instance
        $newCommentEvent = new NewCommentEvent();
        $newCommentEvent->comment = $comment;
        $newCommentEvent->post = $this;
        //triggering an event
        $this->on('newComment',$newCommentEvent);
        return $newCommentEvent->isValid;
    }
}