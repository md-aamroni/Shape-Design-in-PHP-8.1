<?php

namespace App\Patterns;

use App\Interfaces\ConcretePatternAdapter;

class Shape03Design extends ConcretePatternAdapter
{
    /**
     * Shape title
     * @var string
     */
    protected string $title = 'Shape No #03';

    /**
     * Create a new shape instance
     * @param  int $length 
     * @param  null|string $symbol 
     * @return void 
     */
    public function __construct(private readonly int $length, private readonly ?string $symbol = null)
    {
        for ($row = $this->length; $row >= 1; $row--) {
            for ($col = 1; $col <= $row; $col++) {
                $this->composer[$row][] = $this->symbol ?? $col;
            }
        }
    }
}
