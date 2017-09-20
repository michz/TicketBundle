<?php

declare(strict_types=1);

namespace mztx\TicketBundle\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * @author  Michael Zapf <michi.zapf@gmail.com>
 * @date    16.09.17
 * @time    20:42
 */
class TicketProduct implements ResourceInterface
{
    /**
     * @var integer
     */
    protected $id;

    /**
     * @var bool
     */
    protected $isTicket = false;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     *
     * @return TicketProduct
     */
    public function setId(int $id): TicketProduct
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return bool
     */
    public function isTicket(): bool
    {
        return $this->isTicket;
    }

    /**
     * @param bool $isTicket
     *
     * @return TicketProduct
     */
    public function setIsTicket(bool $isTicket): TicketProduct
    {
        $this->isTicket = $isTicket;
        return $this;
    }


}
