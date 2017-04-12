<?php

namespace Exchange\Application;

use Exchange\Command\ExposeItemToExchange;
use Exchange\Command\IntroduceUserItem;
use Exchange\Model\ExchangeProposition;
use Exchange\Model\ExchangePropositions;
use Exchange\Model\Item;
use Exchange\Model\Items;

class UserItemHandler
{
    /**
     * @var Items
     */
    private $items;

    /**
     * @var ExchangePropositions
     */
    private $propositions;

    public function __construct(Items $items, ExchangePropositions $propositions)
    {
        $this->items = $items;
        $this->propositions = $propositions;
    }

    public function introduce(IntroduceUserItem $introduceUserItem)
    {
        $this->items->add(
            new Item(
                $introduceUserItem->getItemName(),
                $introduceUserItem->getUserEmail()
            )
        );
    }

    public function expose(ExposeItemToExchange $exposeItemToExchange)
    {
        $item = $this->items->findOneByNameAndMail(
            $exposeItemToExchange->getItemName(),
            $exposeItemToExchange->getUserEmail()
        );

        $this->propositions->add(
            new ExchangeProposition($item)
        );
    }
}
