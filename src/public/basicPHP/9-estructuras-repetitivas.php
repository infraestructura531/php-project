<?php
//header("location:error.php");
include_once $_SERVER['DOCUMENT_ROOT'].'/dirs.php';
$titulo = "9-estructuras-repetitivas.php";
include_once TEMPLATES_PATH."header.php";
?>
<p>
    <code>
        <pre>
        $i = 0;
        while($i<5){
        echo $i;
        $i += 1;
        };
        </pre>
    </code>
</p>
<?php
$i = 0;
while ($i < 5) {
    echo "$i" . "<br>";
    $i += 1;
};
?>
<p>
    <code>
        <pre>
        do{
            echo "$i";
            $i++;
        }while($i<7);
        </pre>
    </code>
</p>
<?php
do {
    echo "$i" . "<br>";
    $i++;
} while ($i < 7);
?>
<p>
    <code>
        <pre>
        for ($i=0; $i < 5; $i++) { 
            echo "mia ramos <br>";
        };
        </pre>
    </code>
</p>
<?php
for ($i = 0; $i < 5; $i++) {
    echo "mia ramos";
};
?>
<?php
include_once(TEMPLATES_PATH.'boton_back.php');
include_once TEMPLATES_PATH."footer.php";
?>