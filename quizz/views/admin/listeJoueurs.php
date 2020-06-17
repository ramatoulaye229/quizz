

<div class="container w-100 h-100 bg-white rounded" style="margin-right=1%;margin-left:10px">
  <h4 class="text-center font-family: 'Open Sans', sans-serif">LISTE DES JOUEUR PAR SCORE</h4>

  
  


  <div class="contain_sub " style="border:solid 2px #48d1cc;border-radius: 10px; height: 539px;">
    <table class="table table-borderless" style="margin-left:10px">
      <thead>
      <?php

      ?>
        <tr>
          <th scope="col">Nom</th>
          <th scope="col">Prénom</th>
          <th scope="col">Score</th>
        </tr>
      </thead>
      <tbody>
      <?php


  foreach ($_SESSION['joueur'] as $key => $value) {
    $name=explode(" ",$value->getFullName())
    ?>
    <tr>
        <td><?=$name[0] ?> </td>
        <td><?=$name[0]?> </td>
        <td><?=$value->getScore() ?> pts</td>
      </tr>

      <?php
  }
?>
      
      </tbody>
    </table>
  </div>
</div>

