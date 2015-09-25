<?php

namespace Hart\UserBundle\Entity;

use FOS\UserBundle\Entity\Group as AbstractedGroup;

/**
 * Represents a Base Group Entity
 */
class BaseGroup extends AbstractedGroup
{
    /**
     * Represents a string representation
     *
     * @return string
     */
    public function __toString()
    {
        return $this->getName() ?: '';
    }
}
