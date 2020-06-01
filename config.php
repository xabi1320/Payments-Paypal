<?

require 'paypal/autoload.php';

define('URL_SITIO', 'http://localhost/paypal');

$apiContext = new \PayPal\Rest\ApiContext(
    new \PayPal\Auth\OAuthTokenCredential(
        'AQmPlDj2oDpub6nMIUmAm6sShgl10j81Kj7yJIfNilscJvuaAwTOuIe0eLn7rxzbZuc5tKWK8d84gQ_7', //ClienteID
        'ENNSCDuFx-JofK-Lc_sbXFaVT1_cGWzry0WkywpXnK14wR0jsnM-yIECTKXiU2snFIzlafCEw5YObTQe' //Secretx
    )
);