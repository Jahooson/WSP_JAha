<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Arrays</title>
    </head>
    <body>

    </body>
      <br />
        <?php
/*
# övnig 1
      $color = array('white', 'green', 'red', 'blue', 'black');

      echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[2] carpet, the $color[1] lawn, the $color[0] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";
*/
/*
# övnig 2
        $color = array('white', 'green', 'red');
          foreach ($color as $c)
            {
            echo "$c, ";
          }
          sort($color);
          echo "<ul>";
          foreach ($color as $y)
          {
            echo "<li>$y</li>";
          }
          echo "</ul>";
*/
/*
# övnig 3
          $ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

          asort($ceu) ;

          foreach ($ceu as $contry => $capital) {
            echo "The capital of $contry is $capital"."\n";
          }
*/
/*
# övnig 4
          $x = array(1, 2, 3, 4, 5);

          var_dump($x);

          unset($x[3]);

          $x = array_values($x);

          echo '
          ';

          var_dump($x);
*/

#övnig 5
        $color = array(4=> 'white', 6=> 'green', 11=> 'red');

        echo $color[4];

        ?>
</html>
