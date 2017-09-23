<?php

declare(strict_types=1);

namespace mztx\TicketBundle\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

/**
 * Class AdminMenuListener
 *
 * @author  Michael Zapf <michi.zapf@gmail.com>
 * @package mztx\TicketBundle\Menu
 */
final class AdminMenuListener
{
    /**
     * @param MenuBuilderEvent $event
     */
    public function addAdminMenuItems(MenuBuilderEvent $event)
    {
        $menu = $event->getMenu();

        $ticketSubmenu = $menu
            ->addChild('ticketshop')
            ->setLabel('ticket_bundle.admin.menu.ticket')
        ;

        $ticketSubmenu
            ->addChild('template')
            ->setLabel('ticket_bundle.admin.menu.template')
        ;
    }
}
