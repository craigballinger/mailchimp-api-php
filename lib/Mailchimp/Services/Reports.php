<?php   
    
    namespace Mailchimp\Services;
    
    class Reports extends \Mailchimp\Service{
        
        function abuse($campaign_id, array $opts = array()){
            
            return $this->client->request('reports/abuse', array('cid' => $campaign_id, 'opts' => $opts));   
            
        }        
        
        function advice($campaign_id){
            
            return $this->client->request('reports/advice', array('cid' => $campaign_id));   
            
        }        
        
        function bounceMessage($campaign_id, array $email){
            
            return $this->client->request('reports/bounce-message', array('cid' => $campaign_id, 'email' => $email));   
            
        }       
        
        function bounceMessages($campaign_id, array $opts = array()){
            
            return $this->client->request('reports/bounce-messages', array('cid' => $campaign_id, 'opts' => $opts));   
            
        }        
        
        function clickDetail($campaign_id, $tid, array $opts = array()){
            
            return $this->client->request('reports/click-detail', array(
                                                                    'cid' => $campaign_id, 
                                                                    'tid' => $tid,
                                                                    'opts' => $opts,
                                                                    ));   
            
        }        
        
        function clicks($campaign_id){
            
            return $this->client->request('reports/clicks', array('cid' => $campaign_id));   
            
        }    
        
        function domainPerformance($campaign_id){
            
            return $this->client->request('reports/domain-performance', array('cid' => $campaign_id));
            
        }
        
        function ecommOrders($campaign_id, array $opts = array()){
            
            return $this->client->request('reports/ecomm-orders', array('cid' => $campaign_id, 'opts' => $opts));   
            
        }  
        
        function eepurl($campaign_id){
            
            return $this->client->request('reports/eepurl', array('cid' => $campaign_id));   
            
        }            
        
        function geoOpens($campaign_id){
            
            return $this->client->request('reports/geo-opens', array('cid' => $campaign_id));   
            
        }            
        
        function googleAnalytics($campaign_id){
            
            return $this->client->request('reports/google-analytics', array('cid' => $campaign_id));   
            
        }            
        
        function memberActivity($campaign_id, array $emails){
            
            return $this->client->request('reports/member-activity', array('cid' => $campaign_id, 'emails' => $emails));   
            
        }     
        
        function notOpened($campaign_id, array $opts = array()){
            
            return $this->client->request('reports/not-opened', array('cid' => $campaign_id, 'opts' => $opts));   
            
        } 
        
        function opened($campaign_id, array $opts = array()){
            
            return $this->client->request('reports/opened', array('cid' => $campaign_id, 'opts' => $opts));   
            
        } 
        
        function sentTo($campaign_id, array $opts = array()){
            
            return $this->client->request('reports/sent-to', array('cid' => $campaign_id, 'opts' => $opts));   
            
        } 
        
        function share($campaign_id, array $opts = array()){
            
            return $this->client->request('reports/share', array('cid' => $campaign_id, 'opts' => $opts));   
            
        } 
        
        function summary($campaign_id){
            
            return $this->client->request('reports/summary', array('cid' => $campaign_id));   
            
        } 
        
        function unsubscribes($campaign_id, array $opts = array()){
            
            return $this->client->request('reports/unsubscribes', array('cid' => $campaign_id, 'opts' => $opts));   
            
        }         
        
    }
        