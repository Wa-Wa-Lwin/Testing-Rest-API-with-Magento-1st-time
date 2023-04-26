<?php

namespace MageDelight\CustomApi\Api;

interface CustomInterface
{
    /**
     * GET for Post api
     * @param \MageDelight\CustomApi\Model\Data\CustomData $customData
     * @return string
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getPost(\MageDelight\CustomApi\Model\Data\CustomData $customData);
=======
=======
>>>>>>> parent of 362076b ( ok now for checking one parameter and its value with if conditions such as if it is lower or higher than this particular number, what message will show etc)
    public function getPost($value1,$value2);
    //public function getPost($value);
    //public function getPost();
>>>>>>> parent of 362076b ( ok now for checking one parameter and its value with if conditions such as if it is lower or higher than this particular number, what message will show etc)
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