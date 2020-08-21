<?php
    namespace App;
    use App\Tratamiento_i;

class Limite implements Tratamiento_i{
        function tratamiento()
        {
            $tratamiento =
                [
                    [
                        "id" => 1,
                        "realizado"=>false,
                        "title"=>"Correo",
                        "start"=>date("Y-m-d"),
                        "end"=>"",
                        "url"=>""
                    ],
                    [
                        "id" => 2,
                        "realizado"=>false,
                        "title"=>"Meditar",
                        "start"=>date("Y-m-d", strtotime("+1 day")),
                        "end"=>"",
                        "url"=>""
                    ],
                    [
                        "id"=>3,
                        "realizado"=>false,
                        "title"=>"Escribir tus emociones",
                        "start"=>date("Y-m-d",  strtotime("+2 day")),
                        "end"=>"",
                        "url"=>""
                    ]
                ];
            foreach ($tratamiento as $fila){
                $fila = json_encode($fila);
            }
            $nuevo = json_encode($tratamiento);
            return $nuevo;
        }
    }
