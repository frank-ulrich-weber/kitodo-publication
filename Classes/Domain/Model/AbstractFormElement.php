<?php
namespace EWW\Dpf\Domain\Model;

/**
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

class AbstractFormElement
{

    /**
     *
     * @var integer
     */
    protected $uid;

    /**
     *
     * @var string
     */
    protected $displayName;

    /**
     *
     * @var string
     */
    protected $name;

    /**
     *
     * @var array
     */
    protected $items;

    /**
     *
     * @var boolean
     */
    protected $mandatory;

    /**
     *
     * @var boolean
     */
    protected $backendOnly;

    /**
     *
     * @var integer
     */
    protected $maxIteration;

    public function getUid()
    {
        return $this->uid;
    }

    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    public function getDisplayName()
    {
        return $this->displayName;
    }

    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getItems()
    {
        return $this->items;
    }

    public function addItem($item)
    {
        $uid                 = $item->getUid();
        $this->items[$uid][] = $item;
    }

    public function getMandatory()
    {
        return $this->mandatory;
    }

    public function setMandatory($mandatory)
    {
        $this->mandatory = $mandatory;
    }

    public function getBackendOnly()
    {
        return $this->backendOnly;
    }

    public function setBackendOnly($backendOnly)
    {
        $this->backendOnly = $backendOnly;
    }

    public function getMaxIteration()
    {
        return $this->maxIteration;
    }

    public function setMaxIteration($maxIteration)
    {
        $this->maxIteration = $maxIteration;
    }

}
