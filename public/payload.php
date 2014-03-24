<?php

if ($_POST['payload']) {
    shell_exec('cd ~/public_html/domains/tvrtle/ && git reset --hard HEAD && git pull');
}

?>
