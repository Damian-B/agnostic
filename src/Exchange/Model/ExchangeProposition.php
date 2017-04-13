<?php

namespace Exchange\Model;

class ExchangeProposition
{
    private $id;

    /**
     * @var Item
     */
    private $item;

    public function __construct(Item $item)
    {
        $this->item = $item;
    }

    public function getItem()
    {
        return $this->item;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
}