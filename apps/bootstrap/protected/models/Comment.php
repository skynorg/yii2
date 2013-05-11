<?php
/**
 * Created by JetBrains PhpStorm.
 * User: naa
 * Date: 06.05.13
 * Time: 10:38
 * To change this template use File | Settings | File Templates.
 */

namespace app\models;


use yii\base\Model;

class Comment extends Model{
    public $post_id;
    public $comment;

}