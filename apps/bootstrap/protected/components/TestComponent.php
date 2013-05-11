<?php
/**
 * Created by JetBrains PhpStorm.
 * User: fagor
 * Date: 05.05.13
 * Time: 16:56
 * To change this template use File | Settings | File Templates.
 */
namespace app\components;
use \yii\base\Component;

class TestComponent extends Component {
    /**
     * @var string property which can be get or set
     */
    private $property;

    public function setProperty($property)
    {
        $this->property = $property;
    }

    /**
     * Returns a property
     * @return text
     */
    public function getProperty()
    {
        return $this->property;
    }
}