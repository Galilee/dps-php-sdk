<?php

namespace Galilee\PPM\SDK\DPS\Entity;

/**
 * Class Entity.
 */
class Entity
{
    /** @var string */
    private $entityType = '';
    /** @var string  */
    private $entityName = '';
    /** @var string  */
    private $version = '';
    /** @var string  */
    private $entityId = ''; // urn:{Id}:{entityType}:{entityName}
    /** @var string  */
    private $url = '';
    /** @var string  */
    private $modified = '';
    /** @var string  */
    private $created = '';
    /** @var array  */
    private $userData = [];

    /**
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        $this->unserialize($data);
    }

    /*
     * Methods
     */

    protected function unserialize(array $data = [])
    {
        $availableKeys = get_object_vars($this);
        foreach ($data as $key => $val) {
            if (array_key_exists($key, $availableKeys)) {
                $this->$key = $val;
            }
        }
    }

    /*
     *  Getters / Setters
     */

    /**
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

    /**
     * @param string $entityType
     */
    public function setEntityType($entityType)
    {
        $this->entityType = $entityType;
    }

    /**
     * @return string
     */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /**
     * @param string $entityName
     */
    public function setEntityName($entityName)
    {
        $this->entityName = $entityName;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param string $version
     */
    public function setVersion($version)
    {
        $this->version = $version;
    }

    /**
     * @return string
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param string $entityId
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return string
     */
    public function getModified()
    {
        return $this->modified;
    }

    /**
     * @param string $modified
     */
    public function setModified($modified)
    {
        $this->modified = $modified;
    }

    /**
     * @return string
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param string $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return array
     */
    public function getUserData()
    {
        return $this->userData;
    }

    /**
     * @param array $userData
     */
    public function setUserData($userData)
    {
        $this->userData = $userData;
    }
}
