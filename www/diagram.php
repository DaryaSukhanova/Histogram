<!DOCTYPE html>
<html lang="ru">
<head>
   <title>SVG</title>
   <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
   <meta name="viewport" content="width=devix ce-width, initial-scale=1.0">
   <link rel="stylesheet" href="/assets/styles.css">
   <link rel="icon" href="../img/kimono-dress.ico" type="image/x-icon" />
</head>
<header>

</header>
<body>
   <div class="wrapper">
      <div class="container">
         <main class="main">
           <div class='diagram'>
            <svg width="1000" height="800" viewbox="0 0 1050 800" xmlns="http://www.w3.org/2000/svg">
               <g>
                  <?php
                  $max = max($_POST);
                  if ($max >= 10) {
                     if ($max % 10 != 0){
                     $max = $max + (10 - $max % 10);
                     };
                     $step = round($max/5, 0);
                  } else {
                     if ($max >= 3) {
                        $step = round($max/5, 1);
                     } else {
                        $step = round($max/5, 2);
                     }
                  }    
                  $q = 1000/$max;
                  $value = $step;
                  $step = $step*$q;
                  $i = 0;
                  while($value*$i <= $max + $value){  
                     echo ('<line x1="'.($step*$i).'" y1="50" x2="'.($step*$i).'" y2="630" stroke-width="1" stroke="rgb(194, 194, 194)"/>
                     <text x = "'.($i*$step).'" y= "650">'.($value*$i).' </text>');
                     
                     $i++;
                  }
                  ?>
                  
               </g>
               <?php
                 $months = array( 1 => 'Январь' , 'Февраль' , 'Март' , 'Апрель' , 'Май' , 'Июнь' , 'Июль' , 'Август' , 'Сентябрь' , 'Октябрь' , 'Ноябрь' , 'Декабрь' );
                  for ($i = 1; $i<=12;$i++){
                     $width = (is_numeric($_POST['height'.$i.'']) ? $_POST['height'.$i.'']: 1);
                  echo ('<g>
                        <text x = "-100" y= "'.(($i*50)+20).'">'.$months[$i].'</text>
                        <rect height="30" width="'.$q*$width.'" y="'.($i*50).'" fill="rgb(32, 158, 255)"
                        stroke-width="1" stroke="none"/>
                  </g>');         
                  }
               ?>
            </svg>
           </div>
         </main>
      </div>
   </div>
</body>
</html>