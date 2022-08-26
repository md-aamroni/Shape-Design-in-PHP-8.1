<?php

namespace App\Patterns;

use App\Interfaces\ConcretePatternAdapter;

class Shape09Design extends ConcretePatternAdapter
{
    /**
     * Shape title
     * @var string
     */
    protected string $title = 'Shape No #09';

    /**
     * Create a new shape instance
     * @param  int $length 
     * @param  null|string $symbol 
     * @return void 
     */
    public function __construct(private readonly int $length, private readonly ?string $symbol = null)
    {
        for ($row = $this->length; $row >= 1; $row--) {
            for ($pre = $row; $pre <= $this->length; $pre++) {
                $this->composer[$row][] = ' ';
            }
            for ($col = $row * 2 - 1; $col >= 1; $col--) {
                $this->composer[$row][] = $this->symbol ?? $col;
            }
        }
    }
}
