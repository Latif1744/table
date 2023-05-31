<table border="5">
  <thead>
    <tr>
      <th>perkalian</th>
      <th>Hasil</th>
    </tr>
  </thead>
  
  <tbody>
    <?php
    
    for ($i = 2; $i <= 100; $i=$i+2) {
      $perkalian = $i * $i;
      $hasil = $i * $i;
      echo "<tr>";
      echo "<td>$i x $i</td>";
      echo "<td>$hasil</td>";
      echo "</tr>";
    }
    ?>
  </tbody>
</table>