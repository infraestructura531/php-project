<?php
//header("location:error.php");
$audio = "https://open.spotify.com/embed/playlist/5nXzSNWo7cwaYOamwRn20m?utm_source=generator";
$titulo = "index.php";
include_once "../app/templates/header.php";
?>
<a href="./6-operadores.php">6-operadores</a><br>
<a href="./">7-estructutas de control</a><br>
<iframe src=<?php echo $audio ?> width="100%" height="380" frameborder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture"></iframe>
<?php
include_once "../app/templates/footer.php";
?>