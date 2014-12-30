<?php
/**
 * namespace para nosso modulo Admin\Service
 */

namespace Admin\Service;
use Core\Service\AbstractService;
use Doctrine\ORM\EntityManager;


/**
 * class BannersService
 * Responsavel por gerenciar as movimentações na entidade Banners
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class BannersService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Admin\Entity\Banners';
        parent::__construct($em);
    }
} 