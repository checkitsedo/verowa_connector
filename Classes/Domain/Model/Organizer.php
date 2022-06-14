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
 * Organizer
 */
class Organizer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * organizerId
     *
     * @var string
     */
    protected $organizerId = '';

    /**
     * organizerName
     *
     * @var string
     */
    protected $organizerName = '';

    /**
     * organizerPhone
     *
     * @var string
     */
    protected $organizerPhone = '';

    /**
     * organizerProfession
     *
     * @var string
     */
    protected $organizerProfession = '';

    /**
     * organizerEmail
     *
     * @var string
     */
    protected $organizerEmail = '';

    /**
     * Returns the organizerId
     *
     * @return string $organizerId
     */
    public function getOrganizerId()
    {
        return $this->organizerId;
    }

    /**
     * Sets the organizerId
     *
     * @param string $organizerId
     * @return void
     */
    public function setOrganizerId(string $organizerId)
    {
        $this->organizerId = $organizerId;
    }

    /**
     * Returns the organizerName
     *
     * @return string $organizerName
     */
    public function getOrganizerName()
    {
        return $this->organizerName;
    }

    /**
     * Sets the organizerName
     *
     * @param string $organizerName
     * @return void
     */
    public function setOrganizerName(string $organizerName)
    {
        $this->organizerName = $organizerName;
    }

    /**
     * Returns the organizerPhone
     *
     * @return string $organizerPhone
     */
    public function getOrganizerPhone()
    {
        return $this->organizerPhone;
    }

    /**
     * Sets the organizerPhone
     *
     * @param string $organizerPhone
     * @return void
     */
    public function setOrganizerPhone(string $organizerPhone)
    {
        $this->organizerPhone = $organizerPhone;
    }

    /**
     * Returns the organizerProfession
     *
     * @return string $organizerProfession
     */
    public function getOrganizerProfession()
    {
        return $this->organizerProfession;
    }

    /**
     * Sets the organizerProfession
     *
     * @param string $organizerProfession
     * @return void
     */
    public function setOrganizerProfession(string $organizerProfession)
    {
        $this->organizerProfession = $organizerProfession;
    }

    /**
     * Returns the organizerEmail
     *
     * @return string $organizerEmail
     */
    public function getOrganizerEmail()
    {
        return $this->organizerEmail;
    }

    /**
     * Sets the organizerEmail
     *
     * @param string $organizerEmail
     * @return void
     */
    public function setOrganizerEmail(string $organizerEmail)
    {
        $this->organizerEmail = $organizerEmail;
    }
}
