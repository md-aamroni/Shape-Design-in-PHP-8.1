<?php

namespace App\Patterns;

use App\Interfaces\ConcretePatternAdapter;

class Shape08Design extends ConcretePatternAdapter
{
    /**
     * Shape title
     * @var string
     */
    protected string $title = 'Shape No #08';

    /**
     * Create a new shape instance
     * @param  int $length 
     * @param  null|string $symbol 
     * @return void 
     */
    public function __construct(private readonly int $length, private readonly ?string $symbol = null)
    {
        for ($row = 1; $row <= $this->length; $row++) {
            for ($pre = $this->length; $pre >= $row; $pre--) {
                $this->composer[$row][] = ' ';
            }
            for ($col = $row * 2 - 1; $col >= 1; $col--) {
                $this->composer[$row][] = $this->symbol ?? $col;
            }
        }
    }
}
