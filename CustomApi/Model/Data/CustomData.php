<?php
namespace MageDelight\CustomApi\Model\Data;

use MageDelight\CustomApi\Api\Data\CustomDataInterface;

class CustomData implements CustomDataInterface
{
    private $value1;
    private $value2;

    public function __construct($value1, $value2)
    {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function getValue1()
    {
        return $this->value1;
    }

    public function getValue2()
    {
        return $this->value2;
    }
}
