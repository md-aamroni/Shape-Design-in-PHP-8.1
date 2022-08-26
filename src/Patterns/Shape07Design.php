<?php

namespace App\Patterns;

use App\Interfaces\ConcretePatternAdapter;

class Shape07Design extends ConcretePatternAdapter
{
    /**
     * Shape title
     * @var string
     */
    protected string $title = 'Shape No #07';

    /**
     * Create a new shape instance
     * @param  int $length 
     * @param  null|string $symbol 
     * @return void 
     */
    public function __construct(private readonly int $length, private readonly ?string $symbol = null)
    {
        for ($row = $this->length; $row >= 1; $row--) {
            $space = $this->length - $row;
            for ($pre = 1; $pre <= $space; $pre++) {
                $this->composer[$row][] = ' ';
            }
            for ($col = $row; $col >= 1; $col--) {
                $this->composer[$row][] = $this->symbol ?? $col;
            }
        }
    }
}
