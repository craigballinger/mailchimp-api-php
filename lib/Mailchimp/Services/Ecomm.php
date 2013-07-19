<?php   
    
    namespace Mailchimp\Services;
    
    class Ecomm extends \Mailchimp\Service{
        
        function orderAdd($order){
            
            return $this->client->request('ecomm/order-add', array('order' => $order));   
            
        }
        
        function orderDel($store_id, $order_id){
            
            return $this->client->request('ecomm/order-del', array('store_id' => $store_id, 'order_id' => $order_id));   
            
        }
        
        function orderDelete($store_id, $order_id){
            
            return $this->orderDel($store_id, $order_id);
            
        }
        
        function orders($campaign_id = null, $start = null, $limit = null, $since = null){
            
            return $this->client->request('ecomm/orders', array(
                                                                    'cid' => $campaign_id, 
                                                                    'start' => $start, 
                                                                    'limit' => $limit,
                                                                    'since' => $since,
                                                                   ));  
            
        }
        
    }