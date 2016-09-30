<?php
/**
 * Created by PhpStorm.
 * User: itrascastro
 * Date: 23/9/16
 * Time: 17:58
 */

namespace AppFigura;


use Model\Circulo;
use Model\Punto;

require_once '../Model/Punto.php';
require_once '../Model/Circulo.php';

class App
{
    public static function run()
    {
        // App::testPunto();
        App::testCirculo();
    }

    private static function testCirculo()
    {
        $origen = new Punto(3, 4);
        $radio = 2;

        $circulo = new Circulo($origen, $radio);

        echo $circulo;
    }

    private static function testPunto()
    {
        $p = new Punto(0, 0);

        echo $p;

        $p->setX(2);
        $p->setY(3);

        echo $p;

        $p1 = new Punto(2, 3);

        // $p->desplazar($p1);

        // echo $p;

        if ($p->esIgual($p1)) {
            echo '<br>Son iguales';
        }
    }
}

App::run();
