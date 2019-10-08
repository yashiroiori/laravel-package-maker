<?php

namespace Yashiroiori\LaravelPackageMaker\Commands;

use Illuminate\Console\GeneratorCommand as Generator;
use Yashiroiori\LaravelPackageMaker\Traits\CreatesPackageStubs;

abstract class GeneratorCommand extends Generator
{
    use CreatesPackageStubs;

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [];
    }
}
