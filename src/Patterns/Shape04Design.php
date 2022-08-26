<?php

namespace App\Patterns;

use App\Interfaces\ConcretePatternAdapter;

class Shape04Design extends ConcretePatternAdapter
{
    /**
     * Shape title
     * @var string
     */
    protected string $title = 'Shape No #04';

    /**
     * Create a new shape instance
     * @param  int $length 
     * @param  null|string $symbol 
     * @return void 
     */
    public function __construct(private readonly int $length, private readonly ?string $symbol = null)
    {
        for ($row = 1; $row <= $this->length; $row++) {
            for ($col = 1; $col <= $row; $col++) {
                $this->composer[$row][] = $col;
            }
        }
    }
}
