<?php

use Agrism\GithubActionsEnvs\MultiplierByTwo;

require 'vendor/autoload.php';



echo (new MultiplierByTwo(4))->result();