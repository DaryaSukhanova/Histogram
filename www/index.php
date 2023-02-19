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
   <?php
   $width = 700;
   ?>
   <div class="wrapper">
      <div class="container">
         <main class="main">
            <h1>Создание гистограммы</h1>
           <form class='chart-page' action='diagram.php' method='post'>
               <div class='chart-page-value'>
                  <?php
                  for ($i = 1; $i<=12;$i++){
                     echo("
                     <div class='chart-page_cell'>
                        <input class='quantity' min='0' autocomplete='off'  step='any' type='number' name='height".$i."' required> 
                     </div>");

                  }
                  ?>

               </div>
               <div class="chart-page-send">
                  <input type="submit" value=" Отправить">
               </div>
           </form>
         </main>
      </div>
   </div>
</body>
</html>
