<?php

declare(strict_types=1);

namespace mztx\TicketBundle\Entity;

use Sylius\Component\Resource\Model\ResourceInterface;

/**
 * @author  Michael Zapf <mz@solutionDrive.de>
 */
class TicketTemplate implements ResourceInterface
{
    /**
     * @var string
     */
    protected $name = 'Template';

    /**
     * @var string
     */
    protected $content = '';

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     *
     * @return TicketTemplate
     */
    public function setName(string $name): TicketTemplate
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * @param string $content
     *
     * @return TicketTemplate
     */
    public function setContent(string $content): TicketTemplate
    {
        $this->content = $content;
        return $this;
    }
}
