<?php
    namespace App;
    use App\Tratamiento_i;

class Bipolaridad implements Tratamiento_i{
        function tratamiento()
        {
            $tratamiento =
                [
                    [
                        "id" => 1,
                        "realizado"=>false,
                        "title"=>"Meditar",
                        "start"=>date("Y-m-d"),
                        "end"=>"",
                        "url"=>""
                    ],
                    [
                        "id" => 2,
                        "realizado"=>false,
                        "title"=>"Comer chocolate",
                        "start"=>date("Y-m-d", strtotime("+1 day")),
                        "end"=>"",
                        "url"=>""
                    ],
                    [
                        "id"=>3,
                        "realizado"=>false,
                        "title"=>"Practicar deporte",
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
