<?php

/**
 * Génère une couleur rgb aléatoire
 * @return string : css couleur rgb
 */
function randColor(): string {
     return 'rgb(' . mt_rand(0 , 255) . ',' . mt_rand(0 , 255) . ',' . mt_rand(0 , 255) . ')';
}

/**
 * Génère des blocks de couleur aléatoire
 * @param  integer $n : Nombre de couleurs à generer, 100 par défaut
 * @return string     : Résultat au format html
 */
function colorBlocks(int $n = 100): string {
     $result = "";

     for($i = 0; $i < $n; $i++) {
          $code = randColor();
          $result .= '<div class="code" style="background-color:' . $code . ';">
                         <div class="texte">'. $code . '</div>
                      </div>';
     }

     return $result;
}
