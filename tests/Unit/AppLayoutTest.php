<?php

namespace Tests\Unit\View\Components;

use App\View\Components\AppLayout;
use Tests\TestCase;

/**
 * Class AppLayoutTest.
 *
 * @covers \App\View\Components\AppLayout
 */
class AppLayoutTest extends TestCase
{

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->appLayout = new AppLayout();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->appLayout);
    }

    /** @test */
    public function app_layout_can_be_rendered(): void
    {
        $this->assertEquals(view('layouts.app') , AppLayout::render());
    }
}
