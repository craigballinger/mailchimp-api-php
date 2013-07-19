<?php   
    
    namespace Mailchimp\Services;
    
    class OAuth2 extends \Mailchimp\Service{
        
        function metadata(){
            
            $opts = array(
                        'http'=>array(
                          'method'=>"GET",
                          'header'=>"Authorization: OAuth {$this->client->getApiKey()}\r\n"
                        )
                      );

            $context = stream_context_create($opts);

            $url = 'https://login.mailchimp.com/oauth2/metadata/';
            $response = file_get_contents($url, $false, $context);
            
            return json_decode($response);
            
        }
        
    }