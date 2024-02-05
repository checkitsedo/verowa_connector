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
 * P
 */
class Layer extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * layerId
     *
     * @var int
     */
    protected $layerId = 0;

    /**
     * name
     *
     * @var string
     */
    protected $name = '';

    /**
     * parentId
     *
     * @var int
     */
    protected $parentId = 0;

    /**
     * Returns the layerId
     *
     * @return string $layerId
     */
    public function getLayerId()
    {
        return $this->layerId;
    }

    /**
     * Sets the layerId
     *
     * @param string $layerId
     * @return void
     */
    public function setLayerId(string $layerId)
    {
        $this->layerId = $layerId;
    }

    /**
     * Returns the name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets the name
     *
     * @param string $name
     * @return void
     */
    public function setName(string $name)
    {
        $this->name = $name;
    }

    /**
     * Returns the parentId
     *
     * @return string $parentId
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Sets the parentId
     *
     * @param string $parentId
     * @return void
     */
    public function setParentId(string $parentId)
    {
        $this->parentId = $parentId;
    }
}
