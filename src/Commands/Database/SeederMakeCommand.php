<?php

namespace Yashiroiori\LaravelPackageMaker\Commands\Database;

use Yashiroiori\LaravelPackageMaker\Traits\HasNameInput;
use Yashiroiori\LaravelPackageMaker\Traits\CreatesPackageStubs;
use Illuminate\Database\Console\Seeds\SeederMakeCommand as MakeSeeder;

class SeederMakeCommand extends MakeSeeder
{
    use CreatesPackageStubs, HasNameInput;

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'package:seeder';

    /**
     * Get the destination class path.
     *
     * @return string
     */
    protected function resolveDirectory()
    {
        return $this->getDirInput().'/database/seeds/';
    }
}
