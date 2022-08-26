<?php

namespace App\Patterns;

use App\Interfaces\ConcretePatternAdapter;

class Shape02Design extends ConcretePatternAdapter
{
    /**
     * Shape title
     * @var string
     */
    protected string $title = 'Shape No #02';

    /**
     * Create a new shape instance
     * @param  int $length 
     * @param  null|string $symbol 
     * @return void 
     */
    public function __construct(private readonly int $length, private readonly ?string $symbol = null)
    {
        for ($row = 1; $row <= $this->length; $row++) {
            for ($col = $row; $col >= 1; $col--) {
                $this->composer[$row][] = $this->symbol ?? $col;
            }
        }
    }
}
