<form name="f1" method="post" action="search.php">
    <input type="search" name="search_q"/></br>
    </br>
    <input type="submit" value="Поиск"/></br>
</form>

<?php
$search_q=$_POST['search_q'];
$l= mysqli_connect('localhost', 'root', '', 'register-bd');
$search_q = trim($search_q);
$search_q = strip_tags($search_q);
$q= mysqli_query($l, "SELECT title FROM `Books` WHERE title LIKE '%$search_q%'");
$itog=mysqli_fetch_assoc($q);
  while ($itog = mysqli_fetch_assoc($q)) {
       echo '<h2>'.$itog['title'].'</h2>' ;
    }
 mysqli_free_result($q);
  mysqli_close($l);
?>