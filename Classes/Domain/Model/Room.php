<?php

declare(strict_types=1);

namespace Checkitsedo\VerowaConnector\Domain\Model;


/**
 * This file is part of the "Verowa Connector" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

/**
 * Room
 */
class Room extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * locationName
     *
     * @var string
     */
    protected $locationName = '';

    /**
     * locationId
     *
     * @var int
     */
    protected $locationId = 0;

    /**
     * street
     *
     * @var string
     */
    protected $street = '';

    /**
     * postcode
     *
     * @var string
     */
    protected $postcode = '';

    /**
     * city
     *
     * @var string
     */
    protected $city = '';

    /**
     * locationUrlIsExternal
     *
     * @var bool
     */
    protected $locationUrlIsExternal = false;

    /**
     * roomName
     *
     * @var string
     */
    protected $roomName = '';

    /**
     * roomId
     *
     * @var int
     */
    protected $roomId = 0;

    /**
     * shortcut
     *
     * @var string
     */
    protected $shortcut = '';

    /**
     * locationUrl
     *
     * @var string
     */
    protected $locationUrl = '';

    /**
     * Returns the locationName
     *
     * @return string $locationName
     */
    public function getLocationName()
    {
        return $this->locationName;
    }

    /**
     * Sets the locationName
     *
     * @param string $locationName
     * @return void
     */
    public function setLocationName(string $locationName)
    {
        $this->locationName = $locationName;
    }

    /**
     * Returns the locationId
     *
     * @return int $locationId
     */
    public function getLocationId()
    {
        return $this->locationId;
    }

    /**
     * Sets the locationId
     *
     * @param int $locationId
     * @return void
     */
    public function setLocationId(int $locationId)
    {
        $this->locationId = $locationId;
    }

    /**
     * Returns the street
     *
     * @return string $street
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets the street
     *
     * @param string $street
     * @return void
     */
    public function setStreet(string $street)
    {
        $this->street = $street;
    }

    /**
     * Returns the postcode
     *
     * @return string $postcode
     */
    public function getPostcode()
    {
        return $this->postcode;
    }

    /**
     * Sets the postcode
     *
     * @param string $postcode
     * @return void
     */
    public function setPostcode(string $postcode)
    {
        $this->postcode = $postcode;
    }

    /**
     * Returns the city
     *
     * @return string $city
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Sets the city
     *
     * @param string city
     * @return void
     */
    public function setCity(string $city)
    {
        $this->city = $city;
    }

    /**
     * Returns the locationUrlIsExternal
     *
     * @return bool $locationUrlIsExternal
     */
    public function getLocationUrlIsExternal()
    {
        return $this->locationUrlIsExternal;
    }

    /**
     * Sets the locationUrlIsExternal
     *
     * @param bool $locationUrlIsExternal
     * @return void
     */
    public function setLocationUrlIsExternal(bool $locationUrlIsExternal)
    {
        $this->locationUrlIsExternal = $locationUrlIsExternal;
    }

    /**
     * Returns the boolean state of locationUrlIsExternal
     *
     * @return bool
     */
    public function isLocationUrlIsExternal()
    {
        return $this->locationUrlIsExternal;
    }

    /**
     * Returns the roomName
     *
     * @return string $roomName
     */
    public function getRoomName()
    {
        return $this->roomName;
    }

    /**
     * Sets the roomName
     *
     * @param string $roomName
     * @return void
     */
    public function setRoomName(string $roomName)
    {
        $this->roomName = $roomName;
    }

    /**
     * Returns the roomId
     *
     * @return int $roomId
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Sets the roomId
     *
     * @param int $roomId
     * @return void
     */
    public function setRoomId(int $roomId)
    {
        $this->roomId = $roomId;
    }

    /**
     * Returns the shortcut
     *
     * @return string $shortcut
     */
    public function getShortcut()
    {
        return $this->shortcut;
    }

    /**
     * Sets the shortcut
     *
     * @param string $shortcut
     * @return void
     */
    public function setShortcut(string $shortcut)
    {
        $this->shortcut = $shortcut;
    }

    /**
     * Returns the locationUrl
     *
     * @return string $locationUrl
     */
    public function getLocationUrl()
    {
        return $this->locationUrl;
    }

    /**
     * Sets the locationUrl
     *
     * @param string $locationUrl
     * @return void
     */
    public function setLocationUrl(string $locationUrl)
    {
        $this->locationUrl = $locationUrl;
    }
}
