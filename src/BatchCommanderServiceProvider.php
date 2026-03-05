<?php

declare(strict_types=1);

namespace Hackbard\LaravelAiBatchCommander;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class BatchCommanderServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('batch-commander')
            ->hasConfigFile();
    }
}
