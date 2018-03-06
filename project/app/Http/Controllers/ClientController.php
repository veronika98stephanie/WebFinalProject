<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;
use App\Models\PaymentMethod;

class ClientController extends Controller
{
    public function __construct(Client $client, PaymentMethod $paymentMethod){
        $this->client = $client;
        $this->paymentMethod = $paymentMethod;
    }

    public function addClient(Request $request){
        $newClient = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'accessToken' => $request->accessToken,
            'address' => $request->address,
            'phone' => $request->phone,
        ];

        $newClient = $this->client->create($newClient);

        if($newClient != null){
            var_dump($newClient);
        }else{
            echo 'failed';
        }
    }
    public function updateClient(Request $request){
        $updateClient = Client::where('id', $request->id)
            ->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password,
                'accessToken' => $request->accessToken,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);

        return $updateClient;
    }

    public function getClient(){
        return Client::All();
    }

    public function addPaymentMethod(Request $request){
        $newPayment = [
            'name' =>$request->name
        ];

        $newPayment = $this->paymentMethod->create($newPayment);

        if ($newPayment != null){
            var_dump($newPayment);
        }
        else{
            echo 'Fail';
        }
    }

    public function updatePaymentMethod(Request $request){
        $res = PaymentMethod::where('id', $request->id)->update([
           'name' => $request->name,
        ]);
    }
}
