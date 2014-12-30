<?php
/**
 * namespace para nosso modulo Admin\Service
 */

namespace Admin\Service;
use Core\Service\AbstractService;
use Doctrine\ORM\EntityManager;


/**
 * class ServicosService
 * Responsavel por gerenciar as movimentações na entidade Servicos
 * @author Winston Hanun Junior <ceo@sisdeve.com.br> skype ceo_sisdeve
 * @copyright (c) 2014, Winston Hanun Junior
 * @link http://www.sisdeve.com.br
 * @version V0.1
 */

class ServicosService extends AbstractService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Admin\Entity\Servicos';
        parent::__construct($em);
    }

    /**
     * @param array $data
     *
     * @return object
     */
    public function save(Array $data = array())
    {

        $data['id_pai'] = (int) $this->em->getRepository('Admin\Entity\Servicos')
            ->find($data['id_pai']);
        //var_dump($data);die;
        return parent::save($data);
    }
} 