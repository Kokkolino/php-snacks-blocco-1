<?php
$string = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut excepturi possimus repudiandae. Eum est dolorum repellat possimus deserunt! Quam voluptate laboriosam, placeat libero maxime voluptatum animi sunt ipsa veritatis a.";
echo $string."<br>";

$exploded = explode('.', $string);

for($i = 0; $i < count($exploded); $i++){
    echo "<br>".$exploded[$i];
}
?>