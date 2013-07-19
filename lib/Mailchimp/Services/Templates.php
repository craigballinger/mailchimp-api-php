<?php   
    
    namespace Mailchimp\Services;
    
    class Templates extends \Mailchimp\Service{
        
        function add($name, $html, $folder_id = null){
            
            return $this->client->request('templates/add', array(
                                                                    'name' => $name, 
                                                                    'html' => $html,
                                                                    'folder_id' => $folder_id,
                                                                    ));   
            
        } 
        
        function del($id){
            
            return $this->client->request('templates/del', array('template_id' => $id));   
            
        } 
        
        function delete($id){
            
            return $this->del($id);
            
        }
        
        function info($id, $type = 'user'){
            
            return $this->client->request('templates/info', array('template_id' => $id, 'type' => $type));   
            
        } 
        
        function listing(array $types = array(), array $filters = array()){
            
            return $this->client->request('templates/list', array('types' => $types, 'filters' => $filters));   
            
        }
            
        function undel($id){
            
            return $this->client->request('templates/undel', array('template_id' => $id));   
            
        } 
        
        function undelete($id){
            
            return $this->undel($id);
            
        }
        
        function update($id, array $values){
            
            return $this->client->request('templates/update', array('template_id' => $id, 'values' => $values));   
            
        }
        
    }