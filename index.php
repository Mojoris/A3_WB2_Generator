<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 17/11/2014
 * Time: 16:50
 */

require __DIR__.'/vendor/autoload.php';

//$slugify = new \Cocur\Slugify\Slugify();
//echo $slugify->slugify('mé je suis Assez refait ça');

\OKLM\StringGenerator\PasswordGenerator::generate(70);

