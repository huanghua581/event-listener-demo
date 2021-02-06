<?php

namespace Feature;

use Cooper\Src\Dispatcher;
use Cooper\Tests\Stub\EventStub;
use Cooper\Tests\Stub\ListenerStub;

class DispatcherTest extends \PHPUnit\Framework\TestCase {

    /**
     * @test
     */
    public function it_can_dispatch_event_to_handle() {
        $dispatcher = new Dispatcher();

        $event = new EventStub();

        $listener_one = $this->createMock(ListenerStub::class);
        $dispatcher->addListener($event->getName(), $listener_one);
        
        $listener_one->expects(self::once())->method('handle')->with($event);

        $dispatcher->dispatch($event);
    }
}
