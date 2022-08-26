<?php

namespace App\Patterns;

use App\Interfaces\ConcretePatternAdapter;

class Shape01Design extends ConcretePatternAdapter
{
    /**
     * Shape title
     * @var string
     */
    protected string $title = 'Shape No #01';

    /**
     * Create a new shape instance
     * @param  int $length 
     * @param  null|string $symbol 
     * @return void 
     */
    public function __construct(private readonly int $length, private readonly ?string $symbol = null)
    {
        for ($row = 1; $row <= $this->length; $row++) {
            for ($col = 1; $col <= $this->length; $col++) {
                $this->composer[$row][] = $this->symbol ?? $col;
            }
        }
    }
}
