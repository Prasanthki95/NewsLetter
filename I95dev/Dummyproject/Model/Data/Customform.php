<?php
declare(strict_types=1);

namespace I95dev\Dummyproject\Model\Data;

use I95dev\Dummyproject\Api\Data\CustomformInterface;

class Customform extends \Magento\Framework\Api\AbstractExtensibleObject implements CustomformInterface
{
    /**
     * Get id
     * @return string|null
     */
    public function getId()
    {
        return $this->_get(self::ID);
    }

    /**
     * Set id
     * @param string $id
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     */
    public function setId($id)
    {
        return $this->setData(self::ID, $id);
    }

    /**
     * Retrieve existing extension attributes object or create a new one.
     * @return \I95dev\Dummyproject\Api\Data\CustomformExtensionInterface|null
     */
    public function getExtensionAttributes()
    {
        return $this->_getExtensionAttributes();
    }

    /**
     * Set an extension attributes object.
     * @param \I95dev\Dummyproject\Api\Data\CustomformExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \I95dev\Dummyproject\Api\Data\CustomformExtensionInterface $extensionAttributes
    ) {
        return $this->_setExtensionAttributes($extensionAttributes);
    }

    /**
     * Get first_name
     * @return string|null
     */
    public function getFirstName()
    {
        return $this->_get(self::FIRST_NAME);
    }

    /**
     * Set first_name
     * @param string $firstName
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     */
    public function setFirstName($firstName)
    {
        return $this->setData(self::FIRST_NAME, $firstName);
    }
	
	/**
     * Get last_name
     * @return string|null
     */
    public function getLastName()
    {
        return $this->_get(self::LAST_NAME);
    }

    /**
     * Set last_name
     * @param string $lastName
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     */
    public function setLastName($lastName)
    {
        return $this->setData(self::LAST_NAME, $lastName);
    }
	
    /**
     * Get email
     * @return string|null
     */
    public function getEmail()
    {
        return $this->_get(self::EMAIL);
    }

    /**
     * Set email
     * @param string $email
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     */
    public function setEmail($email)
    {
        return $this->setData(self::EMAIL, $email);
    }

    /**
     * Get message
     * @return string|null
     */
    public function getMessage()
    {
        return $this->_get(self::MESSAGE);
    }

    /**
     * Set message
     * @param string $message
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     */
    public function setMessage($message)
    {
        return $this->setData(self::MESSAGE, $message);
    }
	
	/**
     * Get status
     * @return string|null
     */
    public function getStatus()
    {
        return $this->_get(self::STATUS);
    }

    /**
     * Set status
     * @param string $status
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     */
    public function setStatus($status)
    {
        return $this->setData(self::STATUS, $status);
    }
	
    /**
     * Get image
     * @return string|null
     */
    public function getImage()
    {
        return $this->_get(self::IMAGE);
    }

    /**
     * Set image
     * @param string $image
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     */
    public function setImage($image)
    {
        return $this->setData(self::IMAGE, $image);
    }

    /**
     * Get created_at
     * @return string|null
     */
    public function getCreatedAt()
    {
        return $this->_get(self::CREATED_AT);
    }

    /**
     * Set created_at
     * @param string $createdAt
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     */
    public function setCreatedAt($createdAt)
    {
        return $this->setData(self::CREATED_AT, $createdAt);
    }

    /**
     * Get phone
     * @return string|null
     */
    public function getPhone()
    {
        return $this->_get(self::PHONE);
    }

    /**
     * Set phone
     * @param string $phone
     * @return \I95dev\Dummyproject\Api\Data\CustomformInterface
     */
    public function setPhone($phone)
    {
        return $this->setData(self::PHONE, $phone);
    }
}

