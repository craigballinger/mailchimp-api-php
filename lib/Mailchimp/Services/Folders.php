<?php   
    
    namespace Mailchimp\Services;
    
    class Folders extends \Mailchimp\Service{
        
        function add($name, $type){
            
            return $this->client->request('folders/add', array('name' => $name, 'type' => $type));   
            
        }
        
        function del($id, $type){
            
            return $this->client->request('folders/del', array('fid' => $id, 'type' => $type));   
            
        }
        
        function delete($id, $type){
            
            return $this->del($id, $type);
            
        }
        
        function listing($type){
            
            return $this->client->request('folders/list', array('type' => $type));   
            
        }
        
        function update($id, $name, $type){
            
            return $this->client->request('folders/update', array('fid' => $id, 'name' => $name, 'type' => $type));   
            
        }
        
    }