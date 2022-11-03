<?php

namespace Agrism\GithubActionsEnvs;

class MultiplierByTwo
{
    protected int $variable;

    public function __construct(int $variable){
        $this->variable = $variable;
    }

    public function result(): int {
        return $this->variable * 2;
    }
}