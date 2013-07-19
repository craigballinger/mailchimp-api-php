<?php   
    
    namespace Mailchimp\Services;
    
    class Vip extends \Mailchimp\Service{
        
        function activity(){
            
            return $this->client->request('vip/activity', array());   
            
        } 
        
        function add($list_id, array $emails){
            
            return $this->client->request('vip/add', array('id' => $list_id, 'emails' => $emails));   
            
        }
        
        function del($list_id, array $emails){
            
            return $this->client->request('vip/del', array('id' => $list_id, 'emails' => $emails));   
            
        }
        
        function delete($list_id, array $emails){
            
            return $this->del($list_id, $emails);
            
        }
        
        function members(){
            
            return $this->client->request('vip/members', array());   
            
        }
        
    }