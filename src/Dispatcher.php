<?php

namespace Cooper\Src;

class Dispatcher {

    protected $listeners = [];

    public function getListeners() {
        return $this->listeners;
    }

    public function addListener($eventName, Listener $listener) {
        $this->listeners[$eventName][] = $listener;
    }

    public function getListenersByEventName($eventName) {
        if (!$this->hasListeners($eventName)) {
            return [];
        }

        return $this->listeners[$eventName];
    }

    public function hasListeners($eventName) {
        return isset($this->listeners[$eventName]);
    }

    public function dispatch(Event $event) {
        foreach ($this->getListenersByEventName($event->getName()) as $listener) {
            $listener->handle($event);
        }
    }
}
