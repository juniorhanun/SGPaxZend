<?php

namespace Pax\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class BackupController extends AbstractActionController
{

    public function indexAction()
    {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = 'Linux1009';
        $dbname = 'paxvila_pax';

        $backupfile = './public_html/backup/Autobackup_' . date("d_m_Y_H_m_s") . '.sql';

        system("mysqldump -h $dbhost -u $dbuser -p$dbpass --lock-tables $dbname > $backupfile");

        return new ViewModel();
    }


}

