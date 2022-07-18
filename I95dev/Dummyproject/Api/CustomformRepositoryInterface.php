<?php
declare(strict_types=1);

namespace I95dev\Dummyproject\Api;

use Magento\Framework\Api\SearchCriteriaInterface;

interface CustomformRepositoryInterface
{

    /**
     * Save Customform
     * @param \I95dev\Dummyproject\Api\Data\CustomformInterface $customform
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function save(
        \I95dev\Dummyproject\Api\Data\CustomformInterface $customform
    );

    /**
     * Retrieve Customform
     * @param string $customformId
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function get($customformId);

    /**
     * Retrieve Customform matching the specified criteria.
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \I95dev\Dummyproject\Api\Data\CustomformSearchResultsInterface
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
    );

    /**
     * Delete Customform
     * @param \I95dev\Dummyproject\Api\Data\CustomformInterface $customform
     * @return bool true on success
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function delete(
        \I95dev\Dummyproject\Api\Data\CustomformInterface $customform
    );

    /**
     * Delete Customform by ID
     * @param string $customformId
     * @return bool true on success
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\LocalizedException
     */
    public function deleteById($customformId);
}

