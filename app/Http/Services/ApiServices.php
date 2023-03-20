<?php

namespace App\Http\Services;

use GuzzleHttp\Client;
use GuzzleHttp\RequestOptions;

class ApiServices
{
    public function requestApi()
    {
        $client = new Client([
            RequestOptions::VERIFY => false,
        ]);

        $response = $client->request('GET', 'https://randomuser.me/api/', [
            'query' => [
                'results' => 1,
                'password' => 'lower,number,8',
                'nat' => 'BR',
                'noinfo' => true
            ],
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);

        $data = json_decode($response->getBody(), true);

        return $data;
    }

    public function ddd($estado)
    {
        //lista de estados
        switch ($estado) {
            case "Distrito Federal":
                $ddd = "61";
                break;
            case "Goiás":
                $ddds = ["62", "64"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Mato Grosso":
                $ddds = ["65", "66"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Mato Grosso do Sul":
                $ddd = "67";
                break;
            case "Alagoas":
                $ddd = "82";
                break;
            case "Bahia":
                $ddds = ["71", "73", "74", "75", "77"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Ceará":
                $ddds = ["85", "88"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Maranhão":
                $ddds = ["98", "99"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Paraíba":
                $ddd = "83";
                break;
            case "Pernambuco":
                $ddds = ["81", "87"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Piauí":
                $ddds = ["86", "89"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Rio Grande do Norte":
                $ddd = "84";
                break;
            case "Sergipe":
                $ddd = "79";
                break;
            case "Acre":
                $ddd = "68";
                break;
            case "Amapá":
                $ddd = "96";
                break;
            case "Amazonas":
                $ddds = ["92", "97"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Pará":
                $ddds = ["91", "93", "94"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Rondônia":
                $ddd = "69";
                break;
            case "Roraima":
                $ddd = "95";
                break;
            case "Tocantins":
                $ddd = "63";
                break;
            case "Espírito Santo":
                $ddds = ["27", "28"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Minas Gerais":
                $ddds = ["31", "32", "33", "34", "35", "37", "38"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Rio de Janeiro":
                $ddds = ["21", "22", "24"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "São Paulo":
                $ddds = ["11", "12", "13", "14", "15", "16", "17", "18", "19"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Paraná":
                $ddds = ["41", "42", "43", "44", "45", "46"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Rio Grande do Sul":
                $ddds = ["51", "53", "54", "55"];
                $ddd = $ddds[array_rand($ddds)];
                break;
            case "Santa Catarina":
                $ddds = ["47", "48", "49"];
                $ddd = $ddds[array_rand($ddds)];
                break;
        }
        return $ddd;
    }
}
