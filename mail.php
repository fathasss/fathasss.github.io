<?php
$alici = 'fatihhas2609@gmail.com';

$adi = $POST_['name'];
$mesaj = $POST_['message'];
$gonderici = $POST_['email'];
$eposta = 'From:' . $gönderici;

if (mail($alici, $adi, $mesaj, $eposta))
{
    echo "Message accepted";
}
else
{
    echo "Error: Message not accepted";
}
?>