<?php
$hote = '127.0.0.1'; //server
$login = 'root';
$pass = '';
$namedb='tasks';
// عرض بيانات اخر عمود تمت اضافته
$pdo  = new PDO("mysql:host=$hote;dbname=$namedb", $login, $pass);

$stmt = $pdo->query("SELECT * from base1 order by id desc limit 1");
$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo '<table border="1" >'."\n";
foreach ( $rows as $row ) {
echo "<tr><td>";
echo($row['right1']);
echo("</td><td>");
echo($row['left1']);
echo("</td><td>");
echo($row['up']);
echo "<tr><td>";
echo($row['stop']);
echo("</td><td>");
echo($row['down']);
//echo("</td><td>");
}
echo "</table>\n"; // سيتم عرض بيانات العمود الاخير على شكل جدول 
?>


