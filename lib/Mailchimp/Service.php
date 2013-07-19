<?php   
    
    namespace Mailchimp;
    
    class Service{
        
        protected $client;
        
        function __construct(\Mailchimp\Client $client){
            $this->client = $client;
        }
        
        function __call($method, $args){
            
            if($method == 'list' && method_exists($this, 'listing')){
                return call_user_func_array(array($this, 'listing'), $args);
            }
            
            throw new \BadMethodCallException(get_class($this).'::'.$method."() doesn't exist");
            
        }
        
    }