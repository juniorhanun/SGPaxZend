<?php

namespace Pax\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * PaxMensalidadeRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PaxMensalidadeRepository extends EntityRepository
{
    public function findByAno($id)
    {
        $ano = $this->createQueryBuilder('m')
            ->where('m.idAssociado = :a1')
            ->setParameter('a1' , $id)
            ->addGroupBy('m.anoReferencia')
            ->getQuery()
            ->getResult();
        //var_dump($ano);die("PaxMensalidadeRepository L 22");
        return $ano;
    }

    public function mensalidadeId(){
        $mensalidade = $this->createQueryBuilder('a')
            ->select('max(a.id)')
            ->orderBy('a.id', 'desc')
            ->setMaxResults(1)
            ->getQuery()->getArrayResult();
        //var_dump($mensalidade);die();
        return $mensalidade;
    }

    public function relatorioMensa($cobrador){
        $relatorio = $this->createQueryBuilder('r')
            ->where('r.paga = :a')
            ->andWhere('r.cobrador = :c')
            ->setParameter('c',$cobrador)
            ->setParameter('a',0)
            ->getQuery()
            ->getResult();
        return $relatorio;
    }
}
