<?php
declare(strict_types=1);

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

namespace OxidEsales\EshopCommunity\Internal\Transition\ShopEvents;

use Symfony\Component\EventDispatcher\Event;

/**
 * Class AllCookiesRemovedEvent
 *
 * @package OxidEsales\EshopCommunity\Internal\ShopEvents
 */
class AllCookiesRemovedEvent extends Event
{
    const NAME = self::class;
}
