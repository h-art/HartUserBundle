<?php

namespace Hart\UserBundle\Entity;

use Hart\UserBundle\Model\User as AbstractedUser;

/**
 * Represents a Base User Entity
 */
class BaseUser extends AbstractedUser
{
    /**
     * Hook on pre-persist operations
     */
    public function prePersist()
    {
        $this->createdAt = new \DateTime();
        $this->updatedAt = new \DateTime();
    }

    /**
     * Hook on pre-update operations
     */
    public function preUpdate()
    {
        $this->updatedAt = new \DateTime();
    }
}
