<?php

namespace Pax\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class GeraForController extends AbstractActionController
{

    public function indexAction()
    {
        $dbname = 'paxvila_pax';

        if (!mysql_connect('localhost', 'root', 'Linux1009')) {
            echo 'Could not connect to mysql';
            exit;
        }
        mysql_select_db($dbname) or die("Can not connect.");

        $table = "pax_associados";


        $sql = "SHOW COLUMNS FROM $table";
        $result = mysql_query($sql);

        if (!$result) {
            echo "DB Error, could not list tables\n";
            echo 'MySQL Error: ' . mysql_error();
            exit;
        }
/*
        echo "<pre>";
        while ($row = mysql_fetch_row($result)) {
            echo "
        //Input {$row[0]}
        1{$row[0]} = new Text('{$row[0]}');
        1{$row[0]}->setLabel('{$row[0]}.: ')
            ->setAttributes(array(
                'maxlength' => 40,
                'class' => 'form-control',
                'id' => '{$row[0]}',
                'placeholder' => ' ". ucfirst($row[0]) ." .:',
            ));
        1this->add(1{$row[0]});<br>";
        }
        echo "</pre><br><br>";
*/
/*

        $sql = "SHOW COLUMNS FROM $table";
        $result = mysql_query($sql);
        echo "<pre>";
        while ($row = mysql_fetch_row($result)) {
            echo "

            1div class='row'>
                1div class='form-group'>
                1label for='inputTelefonePrincipal' class='col-md-2 control-label label_right'>" . ucfirst($row[0]) .".:1/label>
                1div class='col-lg-4  col-md-4'>
                    1?php
                    // renderiza html input
                    echo 6this->formInput(6form->get('{$row[0]}'));

                    // renderiza elemento de erro
                    echo 6this->formElementErrors()
                        ->setMessageOpenFormat(51small class='text-danger'>5)
                        ->setMessageSeparatorString(51/small>1br/>1small class='text-danger'>5)
                        ->setMessageCloseString(51/small>5)
                        ->render(6form->get('{$row[0]}'));
                    ?>
                1/div>
            1/div>
        1/div>
            ";

        }
        echo "</pre><br><br><br><br>";*/



        echo "<pre>";

        $sql = "SHOW COLUMNS FROM $table";
        $result = mysql_query($sql);
        echo "<pre>";
        while ($row = mysql_fetch_row($result)) {
            echo "

            1div class='row'>
                1div class='form-group'>
                1label for='inputTelefonePrincipal' class='col-md-2 control-label label_right'>" . ucfirst($row[0]) ." .:1/label>
                1div class='col-lg-4  col-md-4'>
                    1?=6entity->get" . ucfirst($row[0]) ."() ?>
                1/div>
            1/div>
        1/div>
            ";

        }
        echo "</pre><br><br><br><br>";die;



        mysql_free_result($result);
        return new ViewModel();
    }


}

