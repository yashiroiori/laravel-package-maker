<?php

namespace Yashiroiori\LaravelPackageMaker\Commands\Foundation;

use Yashiroiori\LaravelPackageMaker\Traits\HasNameInput;
use Yashiroiori\LaravelPackageMaker\Traits\CreatesPackageStubs;
use Illuminate\Foundation\Console\ListenerMakeCommand as MakeListener;

class ListenerMakeCommand extends MakeListener
{
    use CreatesPackageStubs, HasNameInput;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'package:listener';

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
