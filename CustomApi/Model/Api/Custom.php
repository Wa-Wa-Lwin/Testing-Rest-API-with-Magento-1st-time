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

