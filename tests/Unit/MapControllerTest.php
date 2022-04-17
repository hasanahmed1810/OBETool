<?php

namespace Tests\Unit\Http\Controllers;

use App\Http\Controllers\MapController;
use Tests\TestCase;

/**
 * Class MapControllerTest.
 *
 * @covers \App\Http\Controllers\MapController
 */
class MapControllerTest extends TestCase
{
    /**
     * @var MapController
     */
    protected $mapController;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();
        $this->mapController = new MapController();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown(): void
    {
        parent::tearDown();

        unset($this->mapController);
    }

    /** @test */
    public function map_controller_map_the_students_to_their_semesters(): void
    {
        $arr = [
            'sem_id' => 06,
            'id' => 00345
        ];
        $this->assertEquals(view('map' , $arr) , MapController::index($arr['sem_id'] , $arr['id']));
    }
}
