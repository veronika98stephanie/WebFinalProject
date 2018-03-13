<?php

namespace App\ElasticModel;

use Elasticsearch\ClientBuilder;
use Illuminate\Http\Request;

class ItemElasticModel
{
	protected $my_index = 'item';
    protected $my_host = 'localhost';

    public function clientBuilder(){
    	$hosts = [
		    [
		        'host' => $this->my_host,
		    ]
		];
		$client = ClientBuilder::create()          
		                    ->setHosts($hosts)      
		                    ->build();     
		                             
		return $client;
    }	


    public function add($id , $cat_id, $qty, $name, $summary, $price, $image_url){
   		$client = $this->clientBuilder();
    	$params = [
		    'index' => $this->my_index,
		    'type' => '_doc',
		    'id' => $id,
		    'body' => [
			    'cat_id' => $cat_id,
			    'qty' => $qty,
			    'name' => $name,
		   		'summary' => $summary,
		   		'price' => $price,
		   		'image_url' => $image_url
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
			    'id' => $id,
			    'client_id' => $client_id,
			    'date' => $date,
		   		'payment_method_id' => $payment_method_id,
		   		'status_id' => $status_id

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


   
    public function searchByName($name){
    	$client = $this->getClient();
    	$params = [
		    'index' => $this->my_index,
		    'type' => '_doc',
		    'body' => [
		        'query' => [
		            'match' => [
		                'name' => $name
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
