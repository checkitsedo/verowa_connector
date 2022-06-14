<?php

declare(strict_types=1);

namespace Checkitsedo\VerowaConnect\Domain\Model;


/**
 * This file is part of the "Verowa Connect" Extension for TYPO3 CMS.
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
     * roomId
     *
     * @var string
     */
    protected $roomId = '';

    /**
     * roomName
     *
     * @var string
     */
    protected $roomName = '';

    /**
     * roomPublicName
     *
     * @var string
     */
    protected $roomPublicName = '';

    /**
     * roomLocationName
     *
     * @var string
     */
    protected $roomLocationName = '';

    /**
     * roomLocationUrl
     *
     * @var string
     */
    protected $roomLocationUrl = '';

    /**
     * roomLocationUrlIsExternal
     *
     * @var bool
     */
    protected $roomLocationUrlIsExternal = false;

    /**
     * Returns the roomId
     *
     * @return string $roomId
     */
    public function getRoomId()
    {
        return $this->roomId;
    }

    /**
     * Sets the roomId
     *
     * @param string $roomId
     * @return void
     */
    public function setRoomId(string $roomId)
    {
        $this->roomId = $roomId;
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
     * Returns the roomPublicName
     *
     * @return string $roomPublicName
     */
    public function getRoomPublicName()
    {
        return $this->roomPublicName;
    }

    /**
     * Sets the roomPublicName
     *
     * @param string $roomPublicName
     * @return void
     */
    public function setRoomPublicName(string $roomPublicName)
    {
        $this->roomPublicName = $roomPublicName;
    }

    /**
     * Returns the roomLocationName
     *
     * @return string $roomLocationName
     */
    public function getRoomLocationName()
    {
        return $this->roomLocationName;
    }

    /**
     * Sets the roomLocationName
     *
     * @param string $roomLocationName
     * @return void
     */
    public function setRoomLocationName(string $roomLocationName)
    {
        $this->roomLocationName = $roomLocationName;
    }

    /**
     * Returns the roomLocationUrl
     *
     * @return string $roomLocationUrl
     */
    public function getRoomLocationUrl()
    {
        return $this->roomLocationUrl;
    }

    /**
     * Sets the roomLocationUrl
     *
     * @param string $roomLocationUrl
     * @return void
     */
    public function setRoomLocationUrl(string $roomLocationUrl)
    {
        $this->roomLocationUrl = $roomLocationUrl;
    }

    /**
     * Returns the roomLocationUrlIsExternal
     *
     * @return bool $roomLocationUrlIsExternal
     */
    public function getRoomLocationUrlIsExternal()
    {
        return $this->roomLocationUrlIsExternal;
    }

    /**
     * Sets the roomLocationUrlIsExternal
     *
     * @param bool $roomLocationUrlIsExternal
     * @return void
     */
    public function setRoomLocationUrlIsExternal(bool $roomLocationUrlIsExternal)
    {
        $this->roomLocationUrlIsExternal = $roomLocationUrlIsExternal;
    }

    /**
     * Returns the boolean state of roomLocationUrlIsExternal
     *
     * @return bool
     */
    public function isRoomLocationUrlIsExternal()
    {
        return $this->roomLocationUrlIsExternal;
    }
}
