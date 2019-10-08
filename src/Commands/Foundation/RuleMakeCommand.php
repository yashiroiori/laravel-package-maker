<?php

namespace Yashiroiori\LaravelPackageMaker\Commands\Foundation;

use Yashiroiori\LaravelPackageMaker\Traits\HasNameInput;
use Yashiroiori\LaravelPackageMaker\Traits\CreatesPackageStubs;
use Illuminate\Foundation\Console\RuleMakeCommand as MakeRule;

class RuleMakeCommand extends MakeRule
{
    use CreatesPackageStubs, HasNameInput;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'package:rule';

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
