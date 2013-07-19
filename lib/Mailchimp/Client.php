<?php

    namespace Mailchimp;
    
    class Client{
        
        const API_URI = 'api.mailchimp.com/2.0/';
        
        protected $api_key;
        protected $dc;
        protected $timeout = 300;
        
        public $oauth2;
        public $campaigns;
        public $ecomm;
        public $folders;
        public $lists;
        public $helper;
        public $reports;
        public $templates;
        public $users;
        public $vip;
        
        function __construct($api_key, $dc = 'us1'){
            
            $this->api_key = $api_key;
            
            //extract the data center from the api key if it's not an oAuth2 token
            if (strstr($this->api_key, "-")) list($key, $dc) = explode("-", $this->api_key, 2);
            $this->dc = $dc;
            
            $this->oauth2 = new Services\OAuth2($this);
            $this->campaigns = new Services\Campaigns($this);
            $this->ecomm = new Services\Ecomm($this);
            $this->folders = new Services\Folders($this);
            $this->lists = new Services\Lists($this);
            $this->helper = new Services\Helper($this);
            $this->reports = new Services\Reports($this);
            $this->templates = new Services\Templates($this);
            $this->users = new Services\Users($this);
            $this->vip = new Services\Vip($this);
            
        }
        
        function getApiKey(){
            return $this->api_key;
        }
        
        function setTimeout($timeout){
            $this->timeout = $timeout;
        }
        
        function request($endpoint, $data){
            
            $data['apikey'] = $this->api_key;

            $ch = curl_init();

            curl_setopt($ch, CURLOPT_URL, "https://".$this->dc.'.'.self::API_URI.$endpoint);
            curl_setopt($ch, CURLOPT_USERAGENT, "craigballinger/mailchimp-api-php");
            curl_setopt($ch, CURLOPT_HEADER, false);
            curl_setopt($ch, CURLOPT_TIMEOUT, $this->timeout);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            
            $result = curl_exec($ch);
            
            curl_close($ch);
            
            return json_decode($result);
        }
        
    }