<?php


namespace Queue_1;


include_once "Element.php";

class Queue
{
    private $front = null;
    private $back = null;

    public function isEmpty(): bool
    {
        return is_null($this->front);
    }

    public function enqueue($value)
    {
        $oldBack = $this->back;
        $this->back = new Element($value);
        if ($this->isEmpty()) {
            $this->front = $this->back;
        } else {
            $oldBack->next = $this->back;
        }
    }

    public function dequeue()
    {
        if ($this->isEmpty()) {
            return null;
        }
        $removedValue = $this->front->value;
        $this->front = $this->front->next;
        return $removedValue;
    }

    public function getQueueData(): string
    {
        $dataQueue = "Queue :";
        $current = $this->front;
        while ($current->value) {
            $dataQueue .= $current->value . " ";
            $current = $current->next;
        }
        $dataQueue .= "<br>";
        return $dataQueue;
    }

    public function getTopData(): string
    {
        return "Top : ".$this->front->value."<br>";
    }
}