<?php

namespace App\ElasticModel;

use Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;

class CustomerElasticModel 
{
    protected $my_index = 'customer';
    protected $my_host = 'localhost';

    public function clientBuilder(){
    	$hosts = [
		    [
		        'host' => $this->my_index,
		    ]
		];
		$client = ClientBuilder::create()          
		                    ->setHosts($hosts)      
		                    ->build();     
		                             
		return $client;
    }	


    public function add($id , $client_id, $date, $payment_method_id, $status_id){
   		$client = $this->clientBuilder();
    	$params = [
		    'index' => $this->my_index,
		    'type' => '_doc',
		    'id' => $id,
		    'body' => [
			    'clientId' => $client_id,
			    'date' => $date,
			    'paymentMethodId' => $payment_method_id,
		   		'statusId' => $status_id,
		    ]
		];
		$response = $client->index($params);
		return $response;
    }
    public function update($id , $client_id, $date, $payment_method_id, $status_id){
   		$client = $this->clientBuilder();
    	$params = [
		    'index' => $this->my_index,
		    'type' => '_doc',
		    'id' => $id,
		    'body' => [
			    'clientId' => $client_id,
			    'date' => $date,
			    'paymentMethodId' => $payment_method_id,
		   		'statusId' => $status_id,
		    ]
		];
		$response = $client->index($params);
		return $response;
    }

    public function delete( $id){
   		$client = $this->getClient();
    	$params = [
		    'index' => $this->my_index,
		    'type' => '_doc',
		    'id' => $id,
		];
		$response = $client->delete($params);
		return $response;
    }


   
    public function searchByClientId($client_id){
    	$client = $this->getClient();
    	$params = [
		    'index' => $this->my_index,
		    'type' => '_doc',
		    'body' => [
		        'query' => [
		            'match' => [
		                'clientId' => $client_id
		            ]
		        ]
		    ]
		];

		$results = $client->search($params);
		return $results;
    }
 	public function searchById( $id){
   		$client = $this->getClient();
    	$params = [
		    'index' => $this->my_index,
		    'type' => '_doc',
		    'id' => $id,
		];
		$response = $client->get($params);
		return $response;
    }
    public function searchAll(){
    	$client = $this->getClient();
    	$params = [
		    'index' => $this->my_index,
		    'type' => '_doc',
		    'body' => '{
				    "query" : {
				        "match_all" : {
				         
				        }
				    }
				}'
		];

		$results = $client->search($params);
		return $results;
    }

}
