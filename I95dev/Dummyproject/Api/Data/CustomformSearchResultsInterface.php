<?php
declare(strict_types=1);

namespace I95dev\Dummyproject\Api\Data;

interface CustomformSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{

    /**
     * Get Customform list.
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface[]
     */
    public function getItems();

    /**
     * Set id list.
     * @param \I95dev\Dummyproject\Api\Data\CustomformInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}

