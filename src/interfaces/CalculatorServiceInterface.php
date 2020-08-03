<?php

namespace phprao\composer-test\interfaces;


interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;
}
