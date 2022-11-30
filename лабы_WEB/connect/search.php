
<?php
$searchq=$_POST["search_q"];
$conn = mysqli_connect('localhost','root','','123');

$searchq = trim($searchq);
$searchq = strip_tags($searchq);
$sql = "SELECT name FROM 'product' WHERE name LIKE '%$searchq%'";
$q = mysqli_query($conn, $sql);

if ($q == false) {
    print("Произошла ошибка при выполнении запроса");
}

$itog=mysqli_fetch_assoc($q);
  while ($itog = mysqli_fetch_assoc($q)) {
        printf("%s (%s)\n",$r["name"]);
    }
mysqli_free_result($q);
mysqli_close($conn);
?>