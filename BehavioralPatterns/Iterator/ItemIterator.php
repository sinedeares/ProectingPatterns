<?php

namespace Iterator;

class ItemIterator implements \Iterator
{
    private $items = [];
    private $position = 0;

    public function addItem(Item $item) {
        $this->items[] = $item;
    }

    /**
     * @inheritDoc
     * возвращает текущий элемент коллекции, на который указывает итератор в данный момент.
     */
    public function current(): mixed
    {
        return $this->items[$this->position];
    }

    /**
     * @inheritDoc
     */
    public function next(): void
    {
        ++$this->position;
    }

    /**
     * @inheritDoc
     * возвращает ключ текущего элемента коллекции, на который указывает итератор в данный момент.
     */
    public function key(): mixed
    {
        return $this->position;
    }

    /**
     * @inheritDoc
     */
    public function valid(): bool
    {
        return isset($this->items[$this->position]);
    }

    /**
     * @inheritDoc
     */
    public function rewind(): void
    {
        $this->position = 0;
    }
}