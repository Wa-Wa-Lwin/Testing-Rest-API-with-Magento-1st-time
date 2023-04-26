<?php
namespace MageDelight\CustomApi\Api;
interface CustomInterface
{
    /**
     * GET for Post api
     * @param string $value1
     * @param string $value2
     * @return string
     */
    public function getPost($value1,$value2);
    //public function getPost($value);
    //public function getPost();
}

