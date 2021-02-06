<?php

namespace Cooper\Src;

abstract class Listener {
    abstract public function handle(Event $event);
}
