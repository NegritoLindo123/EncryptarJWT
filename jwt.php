<?php

    require_once "vendor/autoload.php";
    use Firebase\JWT\JWK;
use Firebase\JWT\JWT as JWT;

    class Encrypt{

        public function jwt($email, $password){

            $time = time();

            $token = array(

                "iat" => $time,
                "exp" => $time + (60*60*24),
                "data" => [

                    "id" => $email,
                    "email" => $password

                ]

            );

            $jwt = JWT::encode($token, "i8sd9898xcv98x7x8cserddfsdfrtd6", 'HS256');
            
            echo "<pre>"; print_r($token); echo "</pre>";

        }

    }