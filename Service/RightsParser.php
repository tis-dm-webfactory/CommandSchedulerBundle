<?php
namespace JMose\CommandSchedulerBundle\Service;

use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\StreamOutput;
use Symfony\Component\HttpKernel\Kernel;
use Doctrine\Bundle\DoctrineBundle\Registry;
use JMose\CommandSchedulerBundle\Entity\Repository\UserHostRepository;

/**
 * Class RightsParser
 * read available rights from database to choose from in command mask
 *
 * @author  Daniel Fischer <dfischer000@gmail.com>
 */
class RightsParser
{

    /**
     * @var Kernel
     */
    private $kernel;

    /**
     * @var string name of doctrine manager
     */
    private $managerName;

    /**
     * @var \Doctrine\Common\Persistence\ObjectManager
     */
    private $doctrineManager;

    /** @var Registry */
    private $doctrine;

    /** @var string bundle name to be used in (almost) all actions */
    private $bundleName = 'JMoseCommandSchedulerBundle';

    /**
     * @param Kernel $kernel
     * @param Registry $doctrine doctrine itself
     * @param string $managerName Name of doctrine manager, default 'default'
     */
    public function __construct(Kernel $kernel, $doctrine, $managerName = 'default')
    {
        $this->kernel = $kernel;
        $this->doctrine = $doctrine;
        $this->managerName = $managerName;

        $this->doctrineManager = $this->doctrine->getManager($managerName);
    }

    /**
     * Read available User/Host requirements from database
     *
     * @return array
     */
    public function getRights()
    {
        /** @var UserHostRepository $repository */
        $repository = $this->doctrine->getRepository($this->bundleName . ':UserHost');
        $result = $repository->findAllSelect();
return $result;
    }

}