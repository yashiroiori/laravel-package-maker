<?php

namespace Yashiroiori\LaravelPackageMaker\Commands\Routing;

use Yashiroiori\LaravelPackageMaker\Traits\HasNameInput;
use Yashiroiori\LaravelPackageMaker\Traits\CreatesPackageStubs;
use Illuminate\Routing\Console\MiddlewareMakeCommand as MakeMiddleware;

class MiddlewareMakeCommand extends MakeMiddleware
{
    use CreatesPackageStubs, HasNameInput;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'package:middleware';

    /**
     * Get the destination class path.
     *
     * @return string
     */
    protected function resolveDirectory()
    {
        return $this->getDirInput().'src';
    }
}
