<?php
/*$data = [
    ['id' => 1, 'name' => 'rrose', 'price' => 500000],
    ['id' => 2, 'name' => 'kaktus', 'price' => 2500000],
    ['id' => 3, 'name' => 'olivki', 'price' => 700000],
];

echo '<table>';
echo '
    <tr>
        <th>ID</th>
        <th>name</th>
        <th>price</th>
    </tr>
';

foreach ($data as $row) {
    echo '<tr>';
    echo '<td>' . htmlspecialchars($row['id']) . '</td>';
    echo '<td>' . htmlspecialchars($row['name']) . '</td>';
    echo '<td>' . htmlspecialchars($row['price']) . '</td>';
    echo '</tr>';
}

echo '</table>';*/


include "config.php";

$ors=$pdo->query("SELECT * FROM `ogororodshop`");

?><table>
     <tr>
    <th>название</th>
    <th>цена</th>
    <th>описание</th>
  </tr>
  <?php 
  $data=$ors->fetchAll();
foreach ($data as $row) {
    ?>

  <tr>
    <td><?php echo $row["kyltura"] ?></td>
    <td><?php echo $row["price"] ?></td>
    <td><?php echo $row["opisanie"] ?></td>
  </tr>

<?php
}
?></table>

<style>
table {
width: 300px;
heght:300px;
background:red;
position:absolute;
left:700px;
top:400px;


}






</style>
<body>
    <iframe width="110" height="200" src="https://www.myinstants.com/instant/knopka-iz-igry-2-47951/embed/" frameborder="0" scrolling="no"></iframe>
</body>