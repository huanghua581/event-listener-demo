<?php

use Cooper\Tests\Stub\EventStub;

class EventTest extends \PHPUnit\Framework\TestCase {

    /**
     * @test
     */
    public function it_return_event_name_with_namespace() {
        $event = new \Cooper\Tests\Stub\EventStub();

        self::assertEquals(EventStub::class, $event->getName());
    }
}
