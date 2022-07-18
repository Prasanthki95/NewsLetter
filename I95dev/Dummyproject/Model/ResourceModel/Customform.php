<?php

namespace I95dev\Dummyproject\Model\ResourceModel;

class Customform extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    /**
     * Define resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('i95dev_dummyproject', 'id');   //here "magelearn_customform" is table name and "id" is the primary key of custom table
    }
}

