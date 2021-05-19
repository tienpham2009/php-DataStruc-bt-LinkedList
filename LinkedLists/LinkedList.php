<?php


class LinkedList
{
    protected $firstNode;
    protected $lastNode;
    protected $count;

    public function __construct()
    {
        $this->firstNode = null;
        $this->lastNode = null;
        $this->count = 0;
    }


    public function isEmpty(): bool
    {
        if ($this->firstNode == null) {
            return true;
        }
        return false;
    }

    public function addFirstNode($value)
    {
        $node = new Node($value);
        if ($this->firstNode == null) {
            $this->firstNode = $node;
            $this->lastNode = $node;
            $this->lastNode->next = null;
        } else {
            $node->next = $this->firstNode;
            $this->firstNode = $node;

        }
        $this->count++;
    }

    public function addLastNode($value)
    {

        if ($this->isEmpty()) {
            $this->addFirstNode($value);
        } else {
            $node = new Node($value);
            $this->lastNode->next = $node;
            $this->lastNode = $node;
        }
        $this->count++;
    }

    public function addOfIndex($index, $value)
    {
        if ($this->isEmpty()) {
            $this->addFirstNode($value);
        } else {
            $node = new Node($value);

            $currNode = $this->firstNode;
            $preNode = $this->firstNode;
            for ($i = 1; $i < $index; $i++) {
                $preNode = $currNode;
                $currNode = $preNode->next;
            }

            $link = $currNode->next;
            $currNode->next = $node;
            $node->next = $link;
        }
        $this->count++;
    }

    public function deleteOfIndex($index)
    {
        if ($this->isEmpty()) {
            echo "LinkedList is empty";
        } else {
            $currNode = $this->firstNode;
            $preNode = $this->firstNode;

            for ($i = 0; $i < $index; $i++) {
                $preNode = $currNode;
                $currNode = $preNode->next;
            }
            $preNode->next = $currNode->next;
            $currNode->next = null;
        }
        $this->count--;
    }

    public function size(): int
    {
        return $this->count;
    }

    public function deleteOfValue(int $value)
    {
        if ($this->isEmpty()) {
            echo "LinkedList is empty";
        } else {

            $currNode = $this->firstNode;
            $preNode = $this->firstNode;
            $count = $this->count;
            if ($this->firstNode->value == $value){
                $this->firstNode = $this->firstNode->next;
            }
            if ($this->lastNode->value == $value){
                $this->lastNode = null;
            }

            while ($count > 0) {
                $preNode = $currNode;
                $currNode = $preNode->next;

                if ($currNode->value == $value) {
                    $preNode->next = $currNode->next;
                    $currNode->next = null;
                }
                $count--;
            }
        }
        $this->count--;

    }


}