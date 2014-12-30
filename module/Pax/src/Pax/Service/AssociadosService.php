<?php
/**
 * namespace para nosso modulo Pax\Service
 */

namespace Pax\Service;
use Core\Service\AbstractService;
use Doctrine\ORM\EntityManager;

/**
 * class AssociadosService
 * Responsavel por gerenciar as movimentações na entidade Associados
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class AssociadosService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Pax\Entity\PaxAssociados';
        parent::__construct($em);
    }

} 