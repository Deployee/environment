<?php


namespace Deployee\Components\Environment;


class Environment implements EnvironmentInterface
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $workDir;

    /**
     * @param string $name
     * @param string $workDir
     */
    public function __construct(string $name, string $workDir)
    {
        $this->name = $name;
        $this->workDir = $workDir;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getWorkDir(): string
    {
        return $this->workDir;
    }
}