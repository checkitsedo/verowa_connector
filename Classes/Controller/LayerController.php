<?php

declare(strict_types=1);

namespace Checkitsedo\VerowaConnector\Controller;


/**
 * This file is part of the "Verowa Connector" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2021 Dominik Senti <info@senti.lu>, checkit senti.lu
 */

/**
 * LayerController
 */
class LayerController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * layerRepository
     *
     * @var \Checkitsedo\VerowaConnector\Domain\Repository\LayerRepository
     */
    protected $layerRepository = null;

    /**
     * @param \Checkitsedo\VerowaConnector\Domain\Repository\LayerRepository $layerRepository
     */
    public function injectLayerRepository(\Checkitsedo\VerowaConnector\Domain\Repository\LayerRepository $layerRepository)
    {
        $this->layerRepository = $layerRepository;
    }

    /**
     * action list
     *
     * @return string|object|null|void
     */
    public function listAction()
    {
        $layers = $this->layerRepository->findAll();
        $this->view->assign('layers', $layers);
    }
}
