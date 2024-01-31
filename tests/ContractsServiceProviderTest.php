<?php

namespace LaravelKit\Modules\Tests;

use LaravelKit\Modules\Contracts\RepositoryInterface;
use LaravelKit\Modules\Laravel\LaravelFileRepository;

class ContractsServiceProviderTest extends BaseTestCase
{
    /** @test */
    public function it_binds_repository_interface_with_implementation()
    {
        $this->assertInstanceOf(LaravelFileRepository::class, app(RepositoryInterface::class));
    }
}
