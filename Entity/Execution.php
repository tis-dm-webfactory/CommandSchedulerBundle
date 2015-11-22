<?php

namespace JMose\CommandSchedulerBundle\Entity;

use JMose\CommandSchedulerBundle\Entity\ScheduledCommand;

/**
 * Execution
 */
class Execution
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $executionDate;

    /**
     * @var integer
     */
    private $runtime;

    /**
     * @var integer
     */
    private $returnCode;

    /**
     * @var ScheduledCommand
     */
    private $command;

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return ScheduledCommand
     */
    public function getCommand()
    {
        return $this->command;
    }

    /**
     * @param ScheduledCommand $command
     */
    public function setCommand($command)
    {
        $this->command = $command;
    }

    /**
     * Set executionDate
     *
     * @param \DateTime $executionDate
     *
     * @return Execution
     */
    public function setExecutionDate($executionDate)
    {
        $this->executionDate = $executionDate;

        return $this;
    }

    /**
     * Get executionDate
     *
     * @return \DateTime
     */
    public function getExecutionDate()
    {
        return $this->executionDate;
    }

    /**
     * Set runtime
     *
     * @param integer $runtime
     *
     * @return Execution
     */
    public function setRuntime($runtime)
    {
        $this->runtime = $runtime;

        return $this;
    }

    /**
     * Get runtime
     *
     * @return integer
     */
    public function getRuntime()
    {
        return $this->runtime;
    }

    /**
     * Set returnCode
     *
     * @param integer $returnCode
     *
     * @return Execution
     */
    public function setReturnCode($returnCode)
    {
        $this->returnCode = $returnCode;

        return $this;
    }

    /**
     * Get returnCode
     *
     * @return integer
     */
    public function getReturnCode()
    {
        return $this->returnCode;
    }
}
