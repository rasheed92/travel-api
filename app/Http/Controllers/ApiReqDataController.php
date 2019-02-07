<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
class ApiReqDataController extends Controller
{
    public function getApiData(Request $Request)
    {
        $from=$Request->query('from');
        $to=$Request->query('to');
        $url="http://partners.api.skyscanner.net/apiservices/browsequotes/v1.0/IQ/usd/en-US/$from/$to/anytime?";
        $client = new Client();
        $res = $client->request('Get', 
        $url, [
            'query' => [
                'apikey' => 'prtl6749387986743898559646983194'
                ]
               
         
        ]);
        $contents = $res->getBody()->getContents();
        $result=  json_decode($contents,true);
            $data = array();
           

    for ($i=0; $i <count($result["Places"]); $i++) { 

        for ($j=0; $j <count($result["Quotes"]); $j++) { 
            if ($result["Quotes"][$j]['OutboundLeg']['DestinationId']==$result["Places"][$i]['PlaceId']) {
          array_push($data, array(
           'Price in USD$' => $result["Quotes"][$j]['MinPrice'],
           'Destination' => $result["Places"][$i]['Name'],
           'IataCode' => $result["Places"][$i]['IataCode'],
           'DepartureDate' => $result["Quotes"][$j]['OutboundLeg']['DepartureDate'],
           'CarrierIName' => $result["Quotes"][$j]['OutboundLeg']['CarrierIds'][0]
           ));

            }
        }
    }
    for ($k=0; $k < count($data); $k++) { 
for ($o=0; $o <count($result["Carriers"]) ; $o++) { 
        if ($result["Carriers"][$o]['CarrierId']==$data[$k]['CarrierIName']) {
        $data[$k]['CarrierIName'] = $result["Carriers"][$o]['Name'];
        }
}

     }


      return  $data;

    }
    
    
}
