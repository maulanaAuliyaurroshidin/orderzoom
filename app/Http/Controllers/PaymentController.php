<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class PaymentController extends Controller
{
    Public function GetPayment(){
        $client = new Client();
        try{
            $res = $client->request('GET','http://localhost/bayar',[]);
            $data = json_decode($res->getBody()->getContents());
            dd($data);
        }
        catch (Exception $e){
            dd($e->getMessage());
        }
    
    }

}
