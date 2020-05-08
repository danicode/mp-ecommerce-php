<?php 

    $filename = "newfile_" . time() . ".txt";
    $myfile = fopen($filename, "w") or die("Unable to open file!");
    fwrite($myfile, 'GET: ' . json_encode($_GET));
    fwrite($myfile, "\nPOST: " . json_encode($_POST));
    fclose($myfile);

    //$_GET['type'] == 'payment' ? exec('/var/www/html/testdani/ispbrain/bin/cake MercadoPagoNotification ' . $_GET['data_id'] . ' > /dev/null &') : ''; 

?>
