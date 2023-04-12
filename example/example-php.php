<?php

use CryptoJsAes\CryptoJsAes;

require __DIR__ . "/../src/CryptoJsAes.php";

// encrypt
$originalValue = ["url" => "google.es", "user" => "pepe", "pass" => 123]; // this could be any value
$password = "123456";
$encrypted = CryptoJsAes::encrypt($originalValue, $password);
// something like: {"ct":"g9uYq0DJypTfiyQAspfUCkf+\/tpoW4DrZrpw0Tngrv10r+\/yeJMeseBwDtJ5gTnx","iv":"c8fdc314b9d9acad7bea9a865671ea51","s":"7e61a4cd341279af"}

// decrypt
// $encrypted = '{"ct":"g9uYq0DJypTfiyQAspfUCkf+\/tpoW4DrZrpw0Tngrv10r+\/yeJMeseBwDtJ5gTnx","iv":"c8fdc314b9d9acad7bea9a865671ea51","s":"7e61a4cd341279af"}';
$password = "123456";
$decrypted = CryptoJsAes::decrypt($encrypted, $password);

echo "Original: " . print_r($originalValue, true) . "<br><br>";
echo "Encrypted: " . $encrypted . "<br><br>";
echo "Decrypted: " . print_r($decrypted, true) . "<br><br>";