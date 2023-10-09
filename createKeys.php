<?php
require 'vendor/autoload.php'; // Load the Composer autoloader

use phpseclib3\Crypt\RSA;

// Create an instance of the RSA class

$privateKey = RSA::createKey();
$publicKey = $privateKey->getPublicKey();


// Save the keys to files
file_put_contents('private.pem', $privateKey);
file_put_contents('public.pem', $publicKey);

$key = file_get_contents('private.pem');

$privateKey1 = RSA::load($key);

echo "Public and private keys generated and saved.\n";

// Content to be encrypted
$plaintext = 'Hello, World!';

// Load the public key for encryption
echo $ciphertext = $privateKey1->getPublicKey()->encrypt($plaintext);
echo $privateKey->decrypt($ciphertext);


?>
