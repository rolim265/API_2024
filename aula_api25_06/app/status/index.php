<?php
    // AQUI VAI SER NOSSA APLICAÇÃO
    require_once __DIR__ . '../../../api/config.php';
    require_once __DIR__ . '../../../api/response.php';
 
    echo Response::resposta(200,'success',[
        'version' => API_VERSION,
        'status' => 'ATIVA'
    ]);


?>