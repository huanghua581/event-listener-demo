<?php

namespace Unit;

class DispatcherTest extends \PHPUnit\Framework\TestCase {

    /**
     * @test
     */
    public function is_holds_an_array_binding_event_and_its_listeners() {
        $dispatcher = new \Cooper\Src\Dispatcher();

        self::assertIsArray($dispatcher->getListeners());
        self::assertEmpty($dispatcher->getListeners());
    }

    /**
     * @test
     */
    public function is_can_add_listener_into_listeners_array() {
        $dispatcher = new \Cooper\Src\Dispatcher();
        $dispatcher->addListener(\Cooper\Tests\Stub\EventStub::class, new \Cooper\Tests\Stub\ListenerStub());

        self::assertCount(1, $dispatcher->getListeners()[\Cooper\Tests\Stub\EventStub::class]);

    }

    /**
     * @test
     */
    public function it_can_get_listeners_by_event_name() {
        $dispatcher = new \Cooper\Src\Dispatcher();

        self::assertCount(0, $dispatcher->getListenersByEventName(\Cooper\Tests\Stub\EventStub::class));

        $dispatcher->addListener(\Cooper\Tests\Stub\EventStub::class, new \Cooper\Tests\Stub\ListenerStub());

        self::assertCount(1, $dispatcher->getListenersByEventName(\Cooper\Tests\Stub\EventStub::class));
    }
}
