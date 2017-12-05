<?php

include("inc/data.php");
include("inc/functions.php");



$pagetitle = "full catalog" ;
$section = null;

if (isset($_get["cat"])) {
if ($_get["cat"] == "books") {
$pagetitle = "books" ;
$section = "books";

} else if ($_get['cat']== "movies") {
  $pagetitle = "movies" ;
  $section = "movies";

} else if ($_get['cat']== "music") {
  $pagetitle = "music" ;
  $section = "music";


}
}
include ("inc/header.php") ; ?>
<div class = "section page">
  <h1><?php echo $pagetitle; ?> </h1>
</div>
<?("inc/footer.php") ?>
