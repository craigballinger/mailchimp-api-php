<?php   
    
    namespace Mailchimp\Services;
    
    class Helper extends \Mailchimp\Service{
        
        function accountDetails(array $exclude = array()){
            
            return $this->client->request('helper/account-details', array('exclude' => $exclude));   
            
        }
        
        function campaignsForEmail(array $email, array $options = array()){
            
            return $this->client->request('helper/campaigns-for-email', array('email' => $email, 'options' => $options));   
            
        }
        
        function chimpChatter(){
            
            return $this->client->request('helper/chimp-chatter', array());
            
        }
        
        function generateText($type, array $content){
            
            return $this->client->request('helper/generate-text', array('type' => $type, 'content' => $content));
            
        }
        
        function inlineCss($html, $strip_css = false){
            
            return $this->client->request('helper/inline-css', array('html' => $html, 'strip_css' => $strip_css));
            
        }
        
        function listsForEmail(array $email){
            
            return $this->client->request('helper/lists-for-email', array('email' => $email));
            
        }
        
        function ping(){
            
            return $this->client->request('helper/ping', array());
            
        }
        
        function searchCampaigns($query, $offset = 0, $snip_start = null, $snip_end = null){
            
            return $this->client->request('helper/search-campaigns', array(
                                                                    'query' => $query,
                                                                    'offset' => $offset,
                                                                    'snip_start' => $snip_start,
                                                                    'snip_end' => $snip_end
                                                                    ));
            
        }
        
        function searchMembers($query, $list_id = null, $offset = 0){
            
            return $this->client->request('helper/search-members', array(
                                                                    'query' => $query,
                                                                    'id' => $list_id,
                                                                    'offset' => $offset,
                                                                    ));
            
        }
        
        function verifiedDomains(){
            
            return $this->client->request('helper/verified-domains', array());
            
        }        
    }