<?php

declare(strict_types=1);

namespace Checkitsedo\VerowaConnect\Controller;


/**
 * This file is part of the "Verowa Connect" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

/**
 * OrganizerController
 */
class OrganizerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * organizerRepository
     *
     * @var \Checkitsedo\VerowaConnect\Domain\Repository\OrganizerRepository
     */
    protected $organizerRepository = null;

    /**
     * @param \Checkitsedo\VerowaConnect\Domain\Repository\OrganizerRepository $organizerRepository
     */
    public function injectOrganizerRepository(\Checkitsedo\VerowaConnect\Domain\Repository\OrganizerRepository $organizerRepository)
    {
        $this->organizerRepository = $organizerRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $organizers = $this->organizerRepository->findAll();
        $this->view->assign('organizers', $organizers);
    }
}
