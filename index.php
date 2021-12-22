<?php


require __DIR__ . '/vendor/autoload.php';

use \App\Pix\Payload;

$obPayload = (new Payload)->setPixKey('32476592854')
                          ->setDescription('Pagamento do pedido 123456')
                          ->setMerchantName('Cleiton da silva')
                          ->setMerchantCity('BOTUCATU')
                          ->setAmount(100.00)
                          ->setTxid('siqPix1234');

$obPayloadQrCode = $obPayload->getPayload();

echo "<pre>";
print_r($obPayloadQrCode);
echo "</pre>";