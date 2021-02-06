<?php

class ListenerTest extends \PHPUnit\Framework\TestCase {
    /**
     * @test
     */
    public function handle_method_should_exist() {
        $listener = new \Cooper\Tests\Stub\ListenerStub();
        self::assertTrue(method_exists($listener, 'handle'));
    }
}
