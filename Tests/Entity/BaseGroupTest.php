<?php

namespace Hart\UserBundle\Tests\Entity;

use Sonata\UserBundle\Entity\BaseGroup;

class BaseGroupTest extends \PHPUnit_Framework_TestCase
{
    public function testToString()
    {
        // Given
        $group = new BaseGroup('Group');

        // When
        $string = (string) $group;

        // Then
        $this->assertEquals('Group', $string, 'Should return the group name as string representation');
    }
}
