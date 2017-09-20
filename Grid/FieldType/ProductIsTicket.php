<?php

declare(strict_types=1);

namespace mztx\TicketBundle\Grid\FieldType;

use Doctrine\ORM\EntityManager;
use Sylius\Component\Grid\Definition\Field;
use Sylius\Component\Grid\FieldTypes\FieldTypeInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

/**
 * @author  Michael Zapf <michi.zapf@gmail.com>
 * @date    16.09.17
 * @time    21:41
 */
class ProductIsTicket implements FieldTypeInterface
{
    const OPTION_DYNAMIC    = 'dynamic';
    const OPTION_TEMPLATE   = 'template';

    /** @var EntityManager */
    private $em;

    /** @var \Twig_Environment */
    private $twig;


    public function __construct(EntityManager $em, \Twig_Environment $twig)
    {
        $this->em   = $em;
        $this->twig = $twig;
    }

    public function render(Field $field, $data, array $options)
    {
        $ticket = $this->em->find('mztx\\TicketBundle\\Entity\\TicketProduct', $data);
        return $this->twig->render($options[self::OPTION_TEMPLATE], [
            'data' => (bool)($ticket != null)
        ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver
            ->setDefaults([
                self::OPTION_DYNAMIC => false,
                self::OPTION_TEMPLATE => '',
            ])
            ->setAllowedTypes(self::OPTION_DYNAMIC, 'boolean')
            ->setAllowedTypes(self::OPTION_TEMPLATE, 'string')
        ;
    }

    public function getName()
    {
        return 'product_is_ticket';
    }
}
