<?php

namespace LaravelKit\Modules\Tests\Commands;

use LaravelKit\Modules\Contracts\RepositoryInterface;
use LaravelKit\Modules\Tests\BaseTestCase;
use Spatie\Snapshots\MatchesSnapshots;

class EventMakeCommandTest extends BaseTestCase
{
    use MatchesSnapshots;
    /**
     * @var \Illuminate\Filesystem\Filesystem
     */
    private $finder;

    /**
     * @var string
     */
    private $modulePath;

    public function setUp(): void
    {
        parent::setUp();
        $this->modulePath = base_path('modules/Blog');
        $this->finder = $this->app['files'];
        $this->artisan('module:make', ['name' => ['Blog']]);
    }

    public function tearDown(): void
    {
        $this->app[RepositoryInterface::class]->delete('Blog');
        parent::tearDown();
    }

    /** @test */
    public function it_generates_a_new_event_class()
    {
        $code = $this->artisan('module:make-event', ['name' => 'PostWasCreated', 'module' => 'Blog']);

        $this->assertTrue(is_file($this->modulePath . '/Events/PostWasCreated.php'));
        $this->assertSame(0, $code);
    }

    /** @test */
    public function it_generated_correct_file_with_content()
    {
        $code = $this->artisan('module:make-event', ['name' => 'PostWasCreated', 'module' => 'Blog']);

        $file = $this->finder->get($this->modulePath . '/Events/PostWasCreated.php');

        $this->assertMatchesSnapshot($file);
        $this->assertSame(0, $code);
    }

    /** @test */
    public function it_can_change_the_default_namespace()
    {
        $this->app['config']->set('modules.paths.generator.event.path', 'SuperEvents');

        $code = $this->artisan('module:make-event', ['name' => 'PostWasCreated', 'module' => 'Blog']);

        $file = $this->finder->get($this->modulePath . '/SuperEvents/PostWasCreated.php');

        $this->assertMatchesSnapshot($file);
        $this->assertSame(0, $code);
    }

    /** @test */
    public function it_can_change_the_default_namespace_specific()
    {
        $this->app['config']->set('modules.paths.generator.event.namespace', 'SuperEvents');

        $code = $this->artisan('module:make-event', ['name' => 'PostWasCreated', 'module' => 'Blog']);

        $file = $this->finder->get($this->modulePath . '/Events/PostWasCreated.php');

        $this->assertMatchesSnapshot($file);
        $this->assertSame(0, $code);
    }
}
