<?php

namespace MageDelight\CustomApi\Api;

interface CustomInterface
{
    /**
     * GET for Post api
     * @param \MageDelight\CustomApi\Model\Data\CustomData $customData
     * @return string
     */
    public function getPost(\MageDelight\CustomApi\Model\Data\CustomData $customData);
}


// namespace MageDelight\CustomApi\Api;

// use MageDelight\CustomApi\Api\Data\CustomDataInterface;

// interface CustomInterface
// {
//     /**
//      * GET for Post api
//      * @param CustomDataInterface $customData
//      * @return string
//      */
//     public function getPost(CustomDataInterface $customData);
// }




// namespace MageDelight\CustomApi\Api;
// interface CustomInterface
// {
//     /**
//      * GET for Post api
//      * @param string $value1
//      * @param string $value2
//      * @return string
//      */
//     //public function getPost($value1,$value2);
//     public function getPost($value1);
//     //public function getPost();
// }