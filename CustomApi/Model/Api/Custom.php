<?php
namespace MageDelight\CustomApi\Model\Api;

use MageDelight\CustomApi\Api\CustomInterface;
use Psr\Log\LoggerInterface; 
use MageDelight\CustomApi\Model\CustomFactory;

class Custom implements CustomInterface 
{
    protected $logger;
    public function __construct(
        LoggerInterface $logger
    )
    {
        $this->logger = $logger;
    }
    /**
     * @inheritdoc
     */
    public function getPost($value1,$value2)
    {
        $response = ['success' => false];

        if ($value1 === "" && $value2 === "") {
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