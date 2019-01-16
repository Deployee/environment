<?php

namespace Deployee\Components\Environment;

interface EnvironmentInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return string
     */
    public function getWorkDir(): string;
}