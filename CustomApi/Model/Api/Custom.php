<?php
namespace MageDelight\CustomApi\Model\Api;

use MageDelight\CustomApi\Api\CustomInterface;
use Psr\Log\LoggerInterface;
use MageDelight\CustomApi\Model\Data\CustomData;
use MageDelight\CustomApi\Model\Api\CustomFactory;

class Custom implements CustomInterface 
{
    protected $logger;
    protected $customFactory;

    public function __construct(
        LoggerInterface $logger,
        CustomFactory $customFactory
    )
    {
        $this->logger = $logger;
        $this->customFactory = $customFactory;
    }
    
    /**
     * @inheritdoc
     */
<<<<<<< HEAD
<<<<<<< HEAD
    public function getPost(CustomData $customData)
    {
        // Get value1 and value2 from $customData object
        $value1 = $customData->getValue1();
        $value2 = $customData->getValue2();

        $response = ['success' => false];

        if ($value1 < "1.0.0" ) {
            $response = ['success' => true, 'message' => 'Version Need to be updated.'];
            $this->logger->info('Version Need to be updated.');
        } else if ($value1 <= "1.1.2") {
            $response = ['success' => true, 'message' => 'Notification will be sent.'];
            $this->logger->info('Notification will be sent.');
        } else {
            $response = ['success' => true, 'message' => 'It is up to date.'];
            $this->logger->info('It is up to date.');
        }

        $returnArray = json_encode($response);
        return $returnArray; 

    }
}


// namespace MageDelight\CustomApi\Model\Api;

// use MageDelight\CustomApi\Api\CustomInterface;
// use Psr\Log\LoggerInterface; 
// use MageDelight\CustomApi\Model\Data\CustomData;

// class Custom implements CustomInterface 
// {
//     protected $logger;
//     public function __construct(
//         LoggerInterface $logger
//     )
//     {
//         $this->logger = $logger;
//     }

//     public function getPost(CustomData $customData)
//     {
//         $value1 = $customData->getValue1();
//         $value2 = $customData->getValue2();

//         // your logic here

//         $response = ['success' => true, 'message' => 'It is up to date.'];
//         $this->logger->info('It is up to date.');

//         $returnArray = json_encode($response);
//         return $returnArray; 
//     }
// } 


// namespace MageDelight\CustomApi\Model\Api;

// use MageDelight\CustomApi\Api\CustomInterface;
// use Psr\Log\LoggerInterface; 
// use MageDelight\CustomApi\Model\CustomFactory;

// class Custom implements CustomInterface 
// {
//     protected $logger;
//     public function __construct(
//         LoggerInterface $logger
//     )
//     {
//         $this->logger = $logger;
//     }
//     /**
//      * @inheritdoc
//      */
//     public function getPost($value1)
//     {
//         $response = ['success' => false];

//         $version = "1.0.0";
//         $notification = "2.0.0"; 

//         // $version = $this->getVersion;
//         // $notification = $this->getNotification; 

//         if ( $value1 < $version ) {
//             $response = ['success' => true, 'message' => 'Version Need to be updated.'];
//             $this->logger->info('Version Need to be updated.');
//         } else if ( $value1 <= $notification ) {
//             $response = ['success' => true, 'message' => 'Notification will be sent.'];
//             $this->logger->info('Notification will be sent.');
//         } else {
//             $response = ['success' => true, 'message' => 'It is up to date.'];
//             $this->logger->info('It is up to date.');
//         }

//         $returnArray = json_encode($response);
//         if ($returnArray === false) {
//             $returnArray = json_encode(['success' => false, 'message' => 'Error encoding response.']);
//         }
//         return $returnArray;

//     }
// }



    /*public function getPost($value1)
    {
        $response = ['success' => false];

        if ($value1 < "1.0.0" ) {
            $response = ['success' => true, 'message' => 'Version Need to be updated.'];
            $this->logger->info('Version Need to be updated.');
        } else if ($value1 <= "1.1.2") {
            $response = ['success' => true, 'message' => 'Notification will be sent.'];
            $this->logger->info('Notification will be sent.');
        } else {
            $response = ['success' => true, 'message' => 'It is up to date.'];
            $this->logger->info('It is up to date.');
        }

        $returnArray = json_encode($response);
        if ($returnArray === false) {
            $returnArray = json_encode(['success' => false, 'message' => 'Error encoding response.']);
        }
        return $returnArray;

    }*/
 
    /*public function getPost($value1,$value2)
    {
        $response = ['success' => false];

        if ($value1 === "" && $value2 === null) {
=======
    public function getPost($value1,$value2)
    {
        $response = ['success' => false];

        if ($value1 === "" && $value2 === "") {
>>>>>>> parent of 362076b ( ok now for checking one parameter and its value with if conditions such as if it is lower or higher than this particular number, what message will show etc)
=======
    public function getPost($value1,$value2)
    {
        $response = ['success' => false];

        if ($value1 === "" && $value2 === "") {
>>>>>>> parent of 362076b ( ok now for checking one parameter and its value with if conditions such as if it is lower or higher than this particular number, what message will show etc)
            $response = ['success' => true, 'message' => 'Both values are null.'];
            $this->logger->info('Both values are null.');
        } else if ($value1 === null || $value2 === null) {
            $response = ['success' => true, 'message' => 'One of the values is null.'];
            $this->logger->info('One of the values is null.');
        } else {
            $response = ['success' => true, 'message1' => $value1, 'message2' => $value2];
        }

        $returnArray = json_encode($response);
        return $returnArray; 


    }
}


// public function getPost($value1,$value2)
//     {
//         $response = ['success' => false];
//         try 
//         {
//             // Your Code here
//             $response = ['success' => true, 'message' => $value1];
//         } 
        
//         catch (\Exception $e) 
//         {
//             $response = ['success' => false, 'message' => $e->getMessage()];
//             $this->logger->info($e->getMessage());
//         }

//         $returnArray = json_encode($response);
//         return $returnArray; 
//     }