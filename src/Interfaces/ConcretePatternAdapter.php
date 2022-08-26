<?php

namespace App\Interfaces;

use League\CLImate\CLImate;

abstract class ConcretePatternAdapter implements RenderableInterface
{
    /**
     * Shape title
     * @var string
     */
    protected string $title = 'Shape Pattern No #01';

    /**
     * Shape composer
     * @var array|object
     */
    protected array|object $composer = [];

    /**
     * Get the drawable pattern string
     * @return void 
     */
    public function toDrawable(): void
    {
        $climate = new CLImate();
        $climate->backgroundGreen()->blink()->out(sprintf('aamroni@gmail.com 🏡 %s ', $this->title));
        foreach ($this->composer as $compose) {
            echo implode(' ', $compose) . PHP_EOL;
        }
        echo PHP_EOL;
    }

    /**
     * Get the shape composer structure
     * @return array|object 
     */
    public function toStdArray(): array|object
    {
        return $this->composer;
    }
}
