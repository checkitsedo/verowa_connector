<?php

declare(strict_types=1);

namespace Checkitsedo\VerowaConnect\Domain\Model;

/*
 * This file is part of the "Verowa Connect" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;
 
/**
 * Event
 */
class Event extends AbstractEntity
{

    /**
     * eventId
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $eventId = '';

    /**
     * dateFrom
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $dateFrom = 0;

    /**
     * dateTo
     *
     * @var int
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $dateTo = 0;

    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * hideTime
     *
     * @var bool
     */
    protected $hideTime = false;

    /**
     * shortDesc
     *
     * @var string
     */
    protected $shortDesc = '';

    /**
     * longDesc
     *
     * @var string
     */
    protected $longDesc = '';

    /**
     * childcareId
     *
     * @var string
     */
    protected $childcareId = '';

    /**
     * subscribeDate
     *
     * @var int
     */
    protected $subscribeDate = 0;

    /**
     * subscribeTime
     *
     * @var int
     */
    protected $subscribeTime = 0;

    /**
     * subscribePersonId
     *
     * @var string
     */
    protected $subscribePersonId = '';

    /**
     * baptismOfferId
     *
     * @var string
     */
    protected $baptismOfferId = '';

    /**
     * eventType
     *
     * @var int
     */
    protected $eventType = 0;

    /**
     * eventState
     *
     * @var string
     */
    protected $eventState = '';

    /**
     * dateText
     *
     * @var string
     */
    protected $dateText = '';

    /**
     * imageUrl
     *
     * @var string
     */
    protected $imageUrl = '';

    /**
     * subscriptions
     *
     * @var int
     */
    protected $subscriptions = 0;

    /**
     * organizer
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaConnect\Domain\Model\Organizer>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $organizer = null;

    /**
     * rooms
     *
     * @var \Checkitsedo\VerowaConnect\Domain\Model\Room
     */
    protected $rooms = null;

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
     * @var int
     */
    protected $roomLocationUrlIsExternal = 0;

	/**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->organizer = $this->organizer ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Returns the eventId
     *
     * @return string $eventId
     */
    public function getEventId()
    {
        return $this->eventId;
    }

    /**
     * Sets the eventId
     *
     * @param string $eventId
     * @return void
     */
    public function setEventId(string $eventId)
    {
        $this->eventId = $eventId;
    }

    /**
     * Returns the dateFrom
     *
     * @return \DateTime $dateFrom
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets the dateFrom
     *
     * @param \DateTime $dateFrom
     * @return void
     */
    public function setDateFrom(\DateTime $dateFrom)
    {
        $this->dateFrom = $dateFrom;
    }

    /**
     * Returns the dateTo
     *
     * @return \DateTime $dateTo
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets the dateTo
     *
     * @param \DateTime $dateTo
     * @return void
     */
    public function setDateTo(\DateTime $dateTo)
    {
        $this->dateTo = $dateTo;
    }

    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the hideTime
     *
     * @return bool $hideTime
     */
    public function getHideTime()
    {
        return $this->hideTime;
    }

    /**
     * Sets the hideTime
     *
     * @param bool $hideTime
     * @return void
     */
    public function setHideTime(bool $hideTime)
    {
        $this->hideTime = $hideTime;
    }

    /**
     * Returns the boolean state of hideTime
     *
     * @return bool
     */
    public function isHideTime()
    {
        return $this->hideTime;
    }

    /**
     * Returns the shortDesc
     *
     * @return string $shortDesc
     */
    public function getShortDesc()
    {
        return $this->shortDesc;
    }

    /**
     * Sets the shortDesc
     *
     * @param string $shortDesc
     * @return void
     */
    public function setShortDesc(string $shortDesc)
    {
        $this->shortDesc = $shortDesc;
    }

    /**
     * Returns the longDesc
     *
     * @return string $longDesc
     */
    public function getLongDesc()
    {
        return $this->longDesc;
    }

    /**
     * Sets the longDesc
     *
     * @param string $longDesc
     * @return void
     */
    public function setLongDesc(string $longDesc)
    {
        $this->longDesc = $longDesc;
    }

    /**
     * Returns the childcareId
     *
     * @return string $childcareId
     */
    public function getChildcareId()
    {
        return $this->childcareId;
    }

    /**
     * Sets the childcareId
     *
     * @param string $childcareId
     * @return void
     */
    public function setChildcareId(string $childcareId)
    {
        $this->childcareId = $childcareId;
    }

    /**
     * Returns the subscribeDate
     *
     * @return int $subscribeDate
     */
    public function getSubscribeDate()
    {
        return $this->subscribeDate;
    }

    /**
     * Sets the subscribeDate
     *
     * @param int $subscribeDate
     * @return void
     */
    public function setSubscribeDate(int $subscribeDate)
    {
        $this->subscribeDate = $subscribeDate;
    }

    /**
     * Returns the subscribeTime
     *
     * @return int $subscribeTime
     */
    public function getSubscribeTime()
    {
        return $this->subscribeTime;
    }

    /**
     * Sets the subscribeTime
     *
     * @param int $subscribeTime
     * @return void
     */
    public function setSubscribeTime(int $subscribeTime)
    {
        $this->subscribeTime = $subscribeTime;
    }

    /**
     * Returns the subscribePersonId
     *
     * @return string $subscribePersonId
     */
    public function getSubscribePersonId()
    {
        return $this->subscribePersonId;
    }

    /**
     * Sets the subscribePersonId
     *
     * @param string $subscribePersonId
     * @return void
     */
    public function setSubscribePersonId(string $subscribePersonId)
    {
        $this->subscribePersonId = $subscribePersonId;
    }

    /**
     * Returns the baptismOfferId
     *
     * @return string $baptismOfferId
     */
    public function getBaptismOfferId()
    {
        return $this->baptismOfferId;
    }

    /**
     * Sets the baptismOfferId
     *
     * @param string $baptismOfferId
     * @return void
     */
    public function setBaptismOfferId(string $baptismOfferId)
    {
        $this->baptismOfferId = $baptismOfferId;
    }

    /**
     * Returns the eventType
     *
     * @return int $eventType
     */
    public function getEventType()
    {
        return $this->eventType;
    }

    /**
     * Sets the eventType
     *
     * @param int $eventType
     * @return void
     */
    public function setEventType(int $eventType)
    {
        $this->eventType = $eventType;
    }

    /**
     * Returns the eventState
     *
     * @return string $eventState
     */
    public function getEventState()
    {
        return $this->eventState;
    }

    /**
     * Sets the eventState
     *
     * @param string $eventState
     * @return void
     */
    public function setEventState(string $eventState)
    {
        $this->eventState = $eventState;
    }

    /**
     * Returns the dateText
     *
     * @return string $dateText
     */
    public function getDateText()
    {
        return $this->dateText;
    }

    /**
     * Sets the dateText
     *
     * @param string $dateText
     * @return void
     */
    public function setDateText(string $dateText)
    {
        $this->dateText = $dateText;
    }

    /**
     * Returns the imageUrl
     *
     * @return string $imageUrl
     */
    public function getImageUrl()
    {
        return $this->imageUrl;
    }

    /**
     * Sets the imageUrl
     *
     * @param string $imageUrl
     * @return void
     */
    public function setImageUrl(string $imageUrl)
    {
        $this->imageUrl = $imageUrl;
    }

    /**
     * Returns the subscriptions
     *
     * @return int $subscriptions
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * Sets the subscriptions
     *
     * @param int $subscriptions
     * @return void
     */
    public function setSubscriptions(int $subscriptions)
    {
        $this->subscriptions = $subscriptions;
    }

    /**
     * Adds a Organizer
     *
     * @param \Checkitsedo\VerowaConnect\Domain\Model\Organizer $organizer
     * @return void
     */
    public function addOrganizer(\Checkitsedo\VerowaConnect\Domain\Model\Organizer $organizer)
    {
        $this->organizer->attach($organizer);
    }

    /**
     * Removes a Organizer
     *
     * @param \Checkitsedo\VerowaConnect\Domain\Model\Organizer $organizerToRemove The Organizer to be removed
     * @return void
     */
    public function removeOrganizer(\Checkitsedo\VerowaConnect\Domain\Model\Organizer $organizerToRemove)
    {
        $this->organizer->detach($organizerToRemove);
    }

    /**
     * Returns the organizer
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaConnect\Domain\Model\Organizer> $organizer
     */
    public function getOrganizer()
    {
        return $this->organizer;
    }

    /**
     * Sets the organizer
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Checkitsedo\VerowaConnect\Domain\Model\Organizer> $organizer
     * @return void
     */
    public function setOrganizer(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $organizer)
    {
        $this->organizer = $organizer;
    }

    /**
     * Returns the rooms
     *
     * @return \Checkitsedo\VerowaConnect\Domain\Model\Room $rooms
     */
    public function getRooms()
    {
        return $this->rooms;
    }

    /**
     * Sets the rooms
     *
     * @param \Checkitsedo\VerowaConnect\Domain\Model\Room $rooms
     * @return void
     */
    public function setRooms(\Checkitsedo\VerowaConnect\Domain\Model\Room $rooms)
    {
        $this->rooms = $rooms;
    }

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
        $this->roomName = $roomId;
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
        $this->roomLocationUrl = $roomId;
    }

    /**
     * Returns the roomLocationUrlIsExternal
     *
     * @return int $roomLocationUrlIsExternal
     */
    public function getRoomLocationUrlIsExternal()
    {
        return $this->roomLocationUrlIsExternal;
    }

    /**
     * Sets the roomLocationUrlIsExternal
     *
     * @param int $roomLocationUrlIsExternal
     * @return void
     */
    public function setRoomLocationUrlIsExternal(int $roomLocationUrlIsExternal)
    {
        $this->roomLocationUrlIsExternal = $roomLocationUrlIsExternal;
    }

}
