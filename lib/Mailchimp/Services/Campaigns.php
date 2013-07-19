<?php   
    
    namespace Mailchimp\Services;
    
    class Campaigns extends \Mailchimp\Service{
       
        function content($id, array $options = array()){
            
            return $this->client->request('campaigns/content', array('cid' => $id, 'options' => $options));   
            
        }
        
        function create($type, array $options, array $content, array $segment_opts = array(), array $type_opts = array()){
            
            return $this->client->request('campaigns/create', array(
                                                                    'type' => $type, 
                                                                    'options' => $options, 
                                                                    'content' => $content, 
                                                                    'segment_opts' => $segment_opts,
                                                                    'type_opts' => $type_opts
                                                                   ));
            
        }
        
        function delete($id){
            
            return $this->client->request('campaigns/delete', array('cid' => $id));        
            
        }

        function listing(array $filters = array(), $start = 0, $limit = 25, $sort_field = null, $sort_dir = 'DESC'){
            
            return $this->client->request('campaigns/list', array(
                                                                    'filters' => $filters, 
                                                                    'start' => $start, 
                                                                    'limit' => $limit, 
                                                                    'sort_field' => $sort_field,
                                                                    'sort_dir' => $sort_dir
                                                                 ));
            
        }
        
        function pause($id){
            
            return $this->client->request('campaigns/pause', array('cid' => $id));
            
        }
        
        function replicate($id){
            
            return $this->client->request('campaigns/replicate', array('cid' => $id));
            
        }
        
        function resume($id){
            
            return $this->client->request('campaigns/resume', array('cid' => $id));
            
        }
        
        function scheduleBatch($id, $schedule_time, $num_batches = 2, $stagger_mins = 5){

            return $this->client->request('campaigns/schedule-batch', array(
                                                                    'cid' => $id, 
                                                                    'schedule_time' => $schedule_time, 
                                                                    'num_batches' => $num_batches, 
                                                                    'stagger_mins' => $stagger_mins
                                                                   ));
            
        }
        
        function schedule($id, $schedule_time, $schedule_time_b = null){
            
            return $this->client->request('campaigns/schedule', array(
                                                                    'cid' => $id, 
                                                                    'schedule_time' => $schedule_time, 
                                                                    'schedule_time_b' => $schedule_time_b,
                                                                   ));
            
        }
        
        function segmentTest($list_id, array $options){
            
            return $this->client->request('campaigns/segment-test', array('list_id' => $list_id, 'options' => $options)); 
            
        }
        
        function send($id){
            
            return $this->client->request('campaigns/send', array('cid' => $id)); 
            
        }
        
        function sendTest($id, array $test_emails = array(), $send_type = 'html'){
            
            return $this->client->request('campaigns/send-test', array(
                                                                    'cid' => $id, 
                                                                    'test_emails' => $test_emails, 
                                                                    'send_type' => $send_type,
                                                                   ));
            
        }
        
        function templateContent($id){
            
            return $this->client->request('campaigns/template-content', array('cid' => $id)); 
            
        }
        
        function unschedule($id){
            
            return $this->client->request('campaigns/unschedule', array('cid' => $id)); 
            
        }
        
        function update($id, $name, array $value){
            
            return $this->client->request('campaigns/update', array(
                                                                    'cid' => $id, 
                                                                    'name' => $name, 
                                                                    'value' => $value,
                                                                   ));
            
        }
        
    }