<?php

declare(strict_types=1);

namespace mztx\TicketBundle\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

/**
 * Class AdminMenuListener
 *
 * @author  Michael Zapf <michi.zapf@gmail.com>
 * @date    20.09.17
 * @time    19:32
 * @package mztx\TicketBundle\Menu
 */
final class AdminProductMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminProductMenuItems(MenuBuilderEvent $event)
    {
        $menu = $event->getMenu();
        $menu
            ->addChild('ticket')
            ->setAttribute('template', '@Ticket/Admin/Product/Tab/_ticket.html.twig')
            ->setLabel('ticket_bundle.admin.product.menu_ticket')
        ;
    }
}
