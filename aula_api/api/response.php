<?php
    class Response{
        public static function resposta($status=200, $message='sucess', $data=null){
            //corpo resposta
            header('Content-Type: application/json');
            //metodo é Content-Type: application/json

            return json_encode([
                'status' => $status,
                'mensagem' => $message,
                'dados' => $data
            ]);

        }
    }

?>