<?php

namespace Tests\Unit;
// View\Components

use App\View\Components\GuestLayout;
use Tests\TestCase;

/**
 * Class GuestLayoutTest.
 *
 * @covers \App\View\Components\GuestLayout
 */
class GuestLayoutTest extends TestCase
{
    /**
     * @var GuestLayout
     */
    protected $guestLayout;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->guestLayout = new GuestLayout();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->guestLayout);
    }

    /** @test */
    public function guest_layout_can_be_rendered(): void
    {
        $expView = view('layouts.guest');

        $this->assertEquals($expView , GuestLayout::render());
    }

}
