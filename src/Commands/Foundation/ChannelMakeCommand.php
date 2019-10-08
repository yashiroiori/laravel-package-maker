<?php

namespace Yashiroiori\LaravelPackageMaker\Commands\Foundation;

use Yashiroiori\LaravelPackageMaker\Traits\HasNameInput;
use Yashiroiori\LaravelPackageMaker\Traits\CreatesPackageStubs;
use Illuminate\Foundation\Console\ChannelMakeCommand as MakeChannel;

class ChannelMakeCommand extends MakeChannel
{
    use CreatesPackageStubs, HasNameInput;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'package:channel';

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
