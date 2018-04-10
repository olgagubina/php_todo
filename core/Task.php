<?php
class Task {
    public $description;
    public $completed = false;

    public function isComplete()
    {
    return $this->completed;
    }

    public function complete()
    {
    return $this->completed = true;
    }
}