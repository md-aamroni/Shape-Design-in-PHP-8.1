<?php

namespace App;

use App\Interfaces\ConcretePatternAdapter;
use App\Interfaces\RenderableInterface;
use App\Patterns\Shape01Design;
use App\Patterns\Shape02Design;
use App\Patterns\Shape03Design;
use App\Patterns\Shape04Design;
use App\Patterns\Shape05Design;
use App\Patterns\Shape06Design;
use App\Patterns\Shape07Design;
use App\Patterns\Shape08Design;
use App\Patterns\Shape09Design;
use App\Patterns\Shape13Design;
use League\CLImate\CLImate;
use RecursiveDirectoryIterator;

class ShapeGenerateManager implements RenderableInterface
{
    private const SHAPES = [1, 2, 3, 4, 5, 6, 7, 8, 9];

    /**
     * ConcretePatternAdapter object
     * @var \App\Interfaces\ConcretePatternAdapter
     */
    public ConcretePatternAdapter $pattern;

    /**
     * Create a new object instance
     * @param  string $shapeID 
     * @return void 
     */
    public function __construct(private readonly string $shapeID)
    {
        $iterator = new RecursiveDirectoryIterator(dirname(__DIR__));
        (new CLImate())->addArt($iterator->getPathname())->red()->draw('aamroni');
    }

    /**
     * Process the desired number
     * @param  int $length 
     * @param  null|string $symbol 
     * @return \App\ShapeGenerator 
     */
    public function process(int $length, ?string $symbol = null): self
    {
        try {
            if (!in_array($this->shapeID, self::SHAPES)) {
                throw new \Exception(sprintf('Oops! %s is not found, please try within [%s]', $this->shapeID, implode(', ', self::SHAPES)), 1);
            }
            $this->pattern = match ($this->shapeID) {
                '1'     => new Shape01Design($length, $symbol),
                '2'     => new Shape02Design($length, $symbol),
                '3'     => new Shape03Design($length, $symbol),
                '4'     => new Shape04Design($length, $symbol),
                '5'     => new Shape05Design($length, $symbol),
                '6'     => new Shape06Design($length, $symbol),
                '7'     => new Shape07Design($length, $symbol),
                '8'     => new Shape08Design($length, $symbol),
                '9'     => new Shape09Design($length, $symbol),
                '13'    => new Shape13Design($length, $symbol),
            };
            return $this;
        } catch (\Throwable $th) {
            exit($th->getMessage());
        }
    }

    /**
     * Get the drawable pattern string
     * @return void 
     */
    public function toDrawable(): void
    {
        $this->pattern->toDrawable();
    }

    /**
     * Get the shape composer structure
     * @return array|object 
     */
    public function toStdArray(): array|object
    {
        return $this->pattern->toStdArray();
    }
}
