<?php
/**
 * Created by JetBrains PhpStorm.
 * User: naa
 * Date: 06.05.13
 * Time: 10:30
 * To change this template use File | Settings | File Templates.
 */

namespace app\components;


use yii\base\ModelEvent;

class NewCommentEvent extends ModelEvent{
    public $comment;
    public $post;
}