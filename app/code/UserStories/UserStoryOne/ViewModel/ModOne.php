<?php

namespace UserStories\UserStoryOne\ViewModel;

class ModOne implements IModOne {

    public function getId(){}

    /**
     * Set category id.
     *
     * @param int $id
     * @return $this
     */
    public function setId($id){}

    /**
     * Get parent category ID
     *
     * @return int|null
     */
    public function getParentId(){}

    /**
     * Set parent category ID
     *
     * @param int $parentId
     * @return $this
     */
    public function setParentId($parentId){}

    /**
     * Get category name
     *
     * @return string|null
     */
    public function getName(){}

    /**
     * Set category name
     *
     * @param string $name
     * @return $this
     */
    public function setName($name){}

    /**
     * Check whether category is active
     *
     * @return bool|null
     */
    public function getIsActive(){}

    /**
     * Set whether category is active
     *
     * @param bool $isActive
     * @return $this
     */
    public function setIsActive($isActive){}

    /**
     * Get category position
     *
     * @return int|null
     */
    public function getPosition(){}

    /**
     * Set category position
     *
     * @param int $position
     * @return $this
     */
    public function setPosition($position){}

    /**
     * Get category level
     *
     * @return int|null
     */
    public function getLevel(){}

    /**
     * Set category level
     *
     * @param int $level
     * @return $this
     */
    public function setLevel($level){}

    /**
     * Retrieve children ids comma separated.
     *
     * @return string|null
     */
    public function getChildren(){}

    /**
     * Retrieve category creation date and time.
     *
     * @return string|null
     */
    public function getCreatedAt(){}

    /**
     * Set category creation date and time.
     *
     * @param string $createdAt
     * @return $this
     */
    public function setCreatedAt($createdAt){}

    /**
     * Retrieve category last update date and time.
     *
     * @return string|null
     */
    public function getUpdatedAt(){}

    /**
     * Set category last update date and time.
     *
     * @param string $updatedAt
     * @return $this
     */
    public function setUpdatedAt($updatedAt){}

    /**
     * Retrieve category full path.
     *
     * @return string|null
     */
    public function getPath(){}

    /**
     * Set category full path.
     *
     * @param string $path
     * @return $this
     */
    public function setPath($path){}

    /**
     * Retrieve available sort by for category.
     *
     * @return string[]|null
     */
    public function getAvailableSortBy(){}

    /**
     * Set available sort by for category.
     *
     * @param string[]|string $availableSortBy
     * @return $this
     */
    public function setAvailableSortBy($availableSortBy){}

    /**
     * Get category is included in menu.
     *
     * @return bool|null
     */
    public function getIncludeInMenu(){}

    /**
     * Set category is included in menu.
     *
     * @param bool $includeInMenu
     * @return $this
     */
    public function setIncludeInMenu($includeInMenu){}

    /**
     * Retrieve existing extension attributes object or create a new one.
     *
     * @return \Magento\Catalog\Api\Data\CategoryExtensionInterface|null
     */
    public function getExtensionAttributes(){}

    /**
     * Set an extension attributes object.
     *
     * @param \Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(\Magento\Catalog\Api\Data\CategoryExtensionInterface $extensionAttributes){}

    public function getCustomAttribute($attributeCode){}

    /**
     * Set an attribute value for a given attribute code
     *
     * @param string $attributeCode
     * @param mixed $attributeValue
     * @return $this
     */
    public function setCustomAttribute($attributeCode, $attributeValue){}

    /**
     * Retrieve custom attributes values.
     *
     * @return \Magento\Framework\Api\AttributeInterface[]|null
     */
    public function getCustomAttributes(){}

    /**
     * Set array of custom attributes
     *
     * @param \Magento\Framework\Api\AttributeInterface[] $attributes
     * @return $this
     * @throws \LogicException
     */
    public function setCustomAttributes(array $attributes){}
}