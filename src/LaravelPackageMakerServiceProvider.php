<?php

namespace Yashiroiori\LaravelPackageMaker;

use Illuminate\Support\ServiceProvider;
use Yashiroiori\LaravelPackageMaker\Commands\Replace;
use Yashiroiori\LaravelPackageMaker\Commands\AddPackage;
use Yashiroiori\LaravelPackageMaker\Commands\ClonePackage;
use Yashiroiori\LaravelPackageMaker\Commands\NovaMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\PackageMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\SavePackageCredentials;
use Yashiroiori\LaravelPackageMaker\Commands\Standard\AnyMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\DeletePackageCredentials;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\JobMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\ReadmeMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\TravisMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Standard\TraitMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Database\SeederMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\MailMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\RuleMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\TestMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\CodecovMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\LicenseMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\PhpunitMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\StyleciMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Database\FactoryMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\EventMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\ModelMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\BaseTestMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\ComposerMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\PolicyMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\GitignoreMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Standard\ContractMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Database\MigrationMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\ChannelMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\ConsoleMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\RequestMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Routing\ControllerMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Routing\MiddlewareMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Standard\InterfaceMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\ListenerMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\ObserverMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\ProviderMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\ResourceMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\ExceptionMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Package\ContributionMakeCommand;
use Yashiroiori\LaravelPackageMaker\Commands\Foundation\NotificationMakeCommand;

class LaravelPackageMakerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->commands(
            array_merge(
                $this->routingCommands(),
                $this->packageCommands(),
                $this->databaseCommands(),
                $this->standardCommands(),
                $this->foundationCommands(),
                $this->packageInternalCommands()
            )
        );
    }

    /**
     * Get package database related commands.
     *
     * @return array
     */
    protected function databaseCommands()
    {
        return [
            SeederMakeCommand::class,
            FactoryMakeCommand::class,
            MigrationMakeCommand::class,
        ];
    }

    /**
     * Get package foundation related commands.
     *
     * @return array
     */
    protected function foundationCommands()
    {
        return [
            JobMakeCommand::class,
            MailMakeCommand::class,
            TestMakeCommand::class,
            RuleMakeCommand::class,
            EventMakeCommand::class,
            ModelMakeCommand::class,
            PolicyMakeCommand::class,
            ConsoleMakeCommand::class,
            RequestMakeCommand::class,
            ChannelMakeCommand::class,
            ProviderMakeCommand::class,
            ListenerMakeCommand::class,
            ObserverMakeCommand::class,
            ResourceMakeCommand::class,
            ExceptionMakeCommand::class,
            NotificationMakeCommand::class,
        ];
    }

    /**
     * Get package related commands.
     *
     * @return array
     */
    protected function packageCommands()
    {
        return [
            NovaMakeCommand::class,
            ReadmeMakeCommand::class,
            TravisMakeCommand::class,
            LicenseMakeCommand::class,
            PhpunitMakeCommand::class,
            StyleciMakeCommand::class,
            CodecovMakeCommand::class,
            ComposerMakeCommand::class,
            BaseTestMakeCommand::class,
            GitignoreMakeCommand::class,
            ContributionMakeCommand::class,
        ];
    }

    /**
     * Get package internal related commands.
     *
     * @return array
     */
    protected function packageInternalCommands()
    {
        return [
            Replace::class,
            AddPackage::class,
            ClonePackage::class,
            PackageMakeCommand::class,
            SavePackageCredentials::class,
            DeletePackageCredentials::class,
        ];
    }

    /**
     * Get package routing related commands.
     *
     * @return array
     */
    protected function routingCommands()
    {
        return [
            ControllerMakeCommand::class,
            MiddlewareMakeCommand::class,
        ];
    }

    /**
     * Get standard related commands.
     *
     * @return array
     */
    protected function standardCommands()
    {
        return [
            AnyMakeCommand::class,
            TraitMakeCommand::class,
            ContractMakeCommand::class,
            InterfaceMakeCommand::class,
        ];
    }
}
