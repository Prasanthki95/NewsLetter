<?php
declare(strict_types=1);

namespace I95dev\Dummyproject\Model;

use I95dev\Dummyproject\Api\Data\CustomformInterface;
use I95dev\Dummyproject\Api\Data\CustomformInterfaceFactory;
use Magento\Framework\Api\DataObjectHelper;

class Customform extends \Magento\Framework\Model\AbstractModel
{

    protected $_eventPrefix = 'i95dev_dummyproject';
    protected $dataObjectHelper;

    protected $customformDataFactory;


    /**
     * @param \Magento\Framework\Model\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param CustomformInterfaceFactory $customformDataFactory
     * @param DataObjectHelper $dataObjectHelper
     * @param \I95dev\Dummyproject\Model\ResourceModel\Customform $resource
     * @param \I95dev\Dummyproject\Model\ResourceModel\Customform\Collection $resourceCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        CustomformInterfaceFactory $customformDataFactory,
        DataObjectHelper $dataObjectHelper,
        \I95dev\Dummyproject\Model\ResourceModel\Customform $resource,
        \I95dev\Dummyproject\Model\ResourceModel\Customform\Collection $resourceCollection,
        array $data = []
    ) {
        $this->customformDataFactory = $customformDataFactory;
        $this->dataObjectHelper = $dataObjectHelper;
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * Retrieve customform model with customform data
     * @return CustomformInterface
     */
    public function getDataModel()
    {
        $customformData = $this->getData();
        
        $customformDataObject = $this->customformDataFactory->create();
        $this->dataObjectHelper->populateWithArray(
            $customformDataObject,
            $customformData,
            CustomformInterface::class
        );
        
        return $customformDataObject;
    }
}

