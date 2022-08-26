<?php

namespace App\Patterns;

use App\Interfaces\ConcretePatternAdapter;

class Shape05Design extends ConcretePatternAdapter
{
    /**
     * Shape title
     * @var string
     */
    protected string $title = 'Shape No #05';

    /**
     * Create a new shape instance
     * @param int $length 
     * @param null|string $symbol 
     * @return void 
     */
    public function __construct(private readonly int $length, private readonly ?string $symbol = null)
    {
        for ($row = 1, $total = 2 * $this->length - 1; $row <= $total; $row++) {
            $pause = $row > $this->length ? 2 * $this->length - $row : $row;
            for ($col = 1; $col <= $pause; $col++) {
                $this->composer[$row][] = $this->symbol ?? $col;
            }
        }
    }
}
