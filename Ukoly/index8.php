<?php
interface Pushable {
    public function push($value);
    public function pop();
}

class LIFO implements Pushable {
    private $stack = array();

    public function push($value) {
        array_push($this->stack, $value);
    }

    public function pop() {
        return array_pop($this->stack);
    }
}

class FIFO implements Pushable {
    private $queue = array();

    public function push($value) {
        array_push($this->queue, $value);
    }

    public function pop() {
        return array_shift($this->queue);
    }
}


?>