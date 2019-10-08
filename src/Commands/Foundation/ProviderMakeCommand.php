<?php

namespace Yashiroiori\LaravelPackageMaker\Commands\Foundation;

use Yashiroiori\LaravelPackageMaker\Traits\HasNameInput;
use Yashiroiori\LaravelPackageMaker\Traits\CreatesPackageStubs;
use Illuminate\Foundation\Console\ProviderMakeCommand as MakeProvider;

class ProviderMakeCommand extends MakeProvider
{
    use CreatesPackageStubs, HasNameInput;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'package:provider';

    /**
     * Get the destination class path.
     *
     * @return string
     */
    protected function resolveDirectory()
    {
        return $this->getDirInput().'src';
    }

    /**
     * Get the default namespace for the class.
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace;
    }
}
