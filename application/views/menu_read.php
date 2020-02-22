<?php defined("BASEPATH") or exit("No,Direct Scripts Access Allowed...");?>

<?php

if(isset($menu_data)){
    foreach($menu_data as $result):?>
 
        <textarea id="select" style="color:blue;font-weight:bolder;font-size:22px;font-family:verdana;">
        <?php echo $result->menu_value;?>
    </textarea>
   
    <?php
    endforeach;
}


?>

<button id="copy_button">copy_button</button>
<p id="para">we are learning html css and many more language this itme is very usefull for me</p>
<pre>






















































































</pre>