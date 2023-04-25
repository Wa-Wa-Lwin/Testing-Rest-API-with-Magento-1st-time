<?php
namespace MageDelight\CustomApi\Model\Api;

use MageDelight\CustomApi\Api\CustomInterface;
use Psr\Log\LoggerInterface;
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
    public function getPost($value)
    {
        $response = ['success' => false];
        try {
            // Your Code here
            $response = ['success' => true, 'message' => $value];
        } catch (\Exception $e) {
            $response = ['success' => false, 'message' => $e->getMessage()];
            $this->logger->info($e->getMessage());
        }
        $returnArray = json_encode($response);
        return $returnArray; 
   }
}