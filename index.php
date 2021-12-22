<?php


require __DIR__ . '/vendor/autoload.php';

use \App\Pix\Payload;
use Mpdf\QrCode\QrCode;
use Mpdf\QrCode\Output;


//INSTANCIA PRINCIPAL DO PAYLOAD PIX
$obPayload = (new Payload)->setPixKey('32476592854')
                          ->setDescription('Pagamento do pedido 123456')
                          ->setMerchantName('Andre Siqueira')
                          ->setMerchantCity('BOTUCATU')
                          ->setAmount(100.00)
                          ->setTxid('siqPix1234');

//CÓDIGO DE PAGAMENTO PIX
$PayloadQrCode = $obPayload->getPayload();

//QR CODE
$obQrCode = new QrCode($PayloadQrCode);

//IMAGEM DO QRCODE
$image = (new Output\Png)->output($obQrCode,400);

//header('Content-Type: image/png');
//echo $image;
?>
<h1>QR CODE PIX</h1>
<br>
<img src="data:image/png;base64, <?=base64_encode($image)?>">
<br><br>
Código pix:<br>
<strong><?=$PayloadQrCode?></strong>
