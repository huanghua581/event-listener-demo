<?php

namespace Cooper\Src;

use ReflectionClass;

abstract class Event {
    final public function getName() {
        return (new ReflectionClass($this))->getName();
    }
}
