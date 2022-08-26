<?php

namespace App\Interfaces;

interface RenderableInterface
{
    /**
     * Get the drawable pattern string
     * @return void
     */
    public function toDrawable(): void;

    /**
     * Get the shape composer structure
     * @return array|object 
     */
    public function toStdArray(): array|object;
}
