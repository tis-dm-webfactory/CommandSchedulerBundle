<?php

namespace JMose\CommandSchedulerBundle\Entity\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * UserHostRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserHostRepository extends EntityRepository
{
    /**
     * find all existing user/host requirements to be used in select
     *
     * @return array
     */
    public function findAllSelect()
    {
        $data = $this->findBy(
            array(),
            array('id' => 'ASC')
        );

        return $data;
    }
}
