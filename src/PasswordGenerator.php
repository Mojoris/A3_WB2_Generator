<?php
/**
 * Created by PhpStorm.
 * User: Xtaz
 * Date: 18/11/2014
 * Time: 15:44
 */

namespace OKLM\StringGenerator;

class PasswordGenerator {
    const PASSWORD_STRENGH_EASY= 'abcdefghijklmnopqrstuvwxyz';
    const PASSWORD_STRENGH_MED= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    const PASSWORD_STRENGH_HARD= '€^$*ù!:;,=)àç_è-("é&£%¨§/.?';
    public function __construct(){

    }

    /*public static function generate($longueur,$force)
    {
        $caractere="";
        $mdp= array();
        switch ($force) {
            case 0:
                $caractere= self::PASSWORD_STRENGH_EASY;
                break;
            case 1:
                $caractere= self::PASSWORD_STRENGH_EASY.self::PASSWORD_STRENGH_MED;
                break;
            case 2:
                $caractere= self::PASSWORD_STRENGH_EASY.self::PASSWORD_STRENGH_MED.self::PASSWORD_STRENGH_HARD;
                break;

        };
        $length = strlen($caractere) -1;
        for($i=0;$i<$longueur;$i++)
        {
            $n = rand(0,$length);
            $mdp[] = $caractere[$n];

        }
        echo implode($mdp);
        return implode($mdp);

    }*/

    public static function generate($longueur)
    {

        $wordlist= array("Lorem","ipsum","dolor","sit","amet","consectetur", "adipiscing", "elit",".", "donec", "in",
            "purus", "tortor", "sed", "id" ,"ornare", "augue",",", "vulputate", "ante","Nulla","mi", "leo","eleifend",
            "hendrerit", "at", "euismod", "eu", "risus", "Pellentesque" ,"semper", "ultrices", "arcu", "feugiat","massa",
            "pretium","bibendum","turpis","lorem","gravida","ante","a","volutpat","elit","augue","non","leo", "Cras",
            "ac", "pulvinar","mauris","vel","ornare","massa","Pellentesque","ultrices","justo","libero","tincidunt",
            "congue","Maecenas","ex","tristique","viverra","Vestibulum", "pulvinar", "vitae", "justo", "at","congue",
            "morbi", "sodales", "ligula", "duis", "ac", "lacus", "quis", "quam", "auctor", "varius", "at", "metus",
            "Curabitur","dui");
        $phrase = "";
        $line=0;

        $length = count($wordlist)-1;
        for($i=0;$i<$longueur;$i++)
        {
            $n = rand(0,$length);
            $phrase = $phrase.$wordlist[$n]." ";
            $line++;
           if ($line==20)
            {
                $phrase = $phrase."</br>";
                $line=0;
            }

        }
        echo $phrase;
        return $phrase;

    }

}

$objet=new PasswordGenerator();