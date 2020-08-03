<?php

namespace phprao\composer-test\interfaces;


interface CalculatorServiceInterface
{
    public function add(int $a, int $b): int;

    public function minus(int $a, int $b): int;
}
