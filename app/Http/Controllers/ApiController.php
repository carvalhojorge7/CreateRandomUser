<?php

namespace App\Http\Controllers;

use App\Http\Services\ApiServices;

class ApiController extends Controller
{
    private $apiService;

    public function __construct(ApiServices $apiService)
    {
        $this->apiService = $apiService;
    }

    public function generate()
    {
        $data = $this->apiService->requestApi();

        $ddd = $this->apiService->ddd($data['results'][0]['location']['state']);

        $xplode = explode(' ', $data['results'][0]['phone']);
        $phone = substr_replace($xplode[1], '4', 0, 1);
        $cell = explode(' ', $data['results'][0]['cell']);
        $data['results'][0]['phone'] = '(' . $ddd . ') ' . $phone;
        $data['results'][0]['cell'] = '(' . $ddd . ') 9' . $cell[1];

        $data['results'][0]['gender'] = ($data['results'][0]['gender'] == 'female') ? 'feminino' : 'masculino';


        return response()->json($data);
    }
}
