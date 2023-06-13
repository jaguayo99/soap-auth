<?php
try {
    $client = new SoapClient(null, array(
            'uri' => 'http://dwes.infinityfreeapp.com/soap-automoviles/',
            'location' => 'http://dwes.infinityfreeapp.com/soap-automoviles/service-automoviles-auth.php',
            'trace' => 1
        )
    );

    $client->__setCookie('__test', '682672cd7c8af63d38dae461d88fd641');
    $marcas = $client->ObtenerMarcasUrl();

} catch (Exception $e) {
    echo($client->__getLastResponse());
    echo PHP_EOL;
    echo($client->__getLastRequest());
}
