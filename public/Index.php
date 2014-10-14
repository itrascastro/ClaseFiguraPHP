<?php
/**
 * xenFramework (http://xenframework.com/)
 *
 * This file is part of the xenframework package.
 *
 * (c) Ismael Trascastro <itrascastro@xenframework.com>
 *
 * @link        http://github.com/xenframework for the canonical source repository
 * @copyright   Copyright (c) xenFramework. (http://xenframework.com)
 * @license     MIT License - http://en.wikipedia.org/wiki/MIT_License
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace figura;

require_once 'Figura.php';
require_once 'Punto.php';
require_once 'Circulo.php';
require_once 'Rectangulo.php';

class Index
{
    public static function pruebaPunto()
    {
        $p = new Punto(3,4);
        echo $p . '<br />';
        $p->desplazar(10,10);
        echo $p . '<br />';

        $p1 = new Punto(2,2);

        echo 'Distancia: ' . $p->distancia($p1);
    }

    public static function pruebaCirculo()
    {
        echo '<p>' . Figura::getNumFiguras() . '</p>';

        $origen = new Punto(0,0);
        $c = new Circulo($origen, 3);

        echo $c;

        $c->desplazar(10,10);

        echo $c;

        echo '<p>' . Figura::getNumFiguras() . '</p>';
    }

    public static function pruebaRectangulo()
    {
        $r = new Rectangulo(new Punto(3,0), 10, 20);
        echo $r;
    }
}

//Index::pruebaCirculo();

Index::pruebaRectangulo();
