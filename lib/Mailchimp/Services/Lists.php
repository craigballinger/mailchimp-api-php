<?php   
    
    namespace Mailchimp\Services;
    
    class Lists extends \Mailchimp\Service{
        
        function abuseReports($id, $start = null, $limit = 500, $since = null){
            
            return $this->client->request('lists/abuse-reports', array(
                                                                    'id' => $id, 
                                                                    'start' => $start, 
                                                                    'limit' => $limit,
                                                                    'since' => $since,
                                                                   ));  
            
        }
        
        function activity($id){
            
            return $this->client->request('lists/activity', array('id' => $id));   
            
        }
        
        function batchSubscribe($id, $batch, $double_optin = true, $update_existing = false, $replace_interests = true){
            
            return $this->client->request('lists/batch-subscribe', array(
                                                                    'id' => $id, 
                                                                    'batch' => $batch, 
                                                                    'double_optin' => $double_optin,
                                                                    'update_existing' => $update_existing,
                                                                    'replace_intersts' => $replace_interests,
                                                                   ));  
            
        }
        
        function batchUnsubscribe($id, $batch, $delete_member = false, $send_goodbye = true, $send_notify = false){
            
            return $this->client->request('lists/batch-unsubscribe', array(
                                                                    'id' => $id, 
                                                                    'batch' => $batch, 
                                                                    'delete_member' => $delete_member,
                                                                    'send_goodbye' => $send_goodbye,
                                                                    'send_notify' => $send_notify,
                                                                   ));  
            
        }
        
        function clients($id){
            
            return $this->client->request('lists/clients', array('id' => $id));   
            
        }
        
        function growthHistory($id){
            
            return $this->client->request('lists/growth-history', array('id' => $id));   
            
        }
        
        function interestGroupAdd($id, $group_name, $grouping_id = null){
            
            return $this->client->request('lists/interest-group-add', array(
                                                                    'id' => $id, 
                                                                    'group_name' => $group_name, 
                                                                    'grouping_id' => $grouping_id,
                                                                   ));  
            
        }
        
        function interestGroupDel($id, $group_name, $grouping_id = null){
            
            return $this->client->request('lists/interest-group-del', array(
                                                                    'id' => $id, 
                                                                    'group_name' => $group_name, 
                                                                    'grouping_id' => $grouping_id,
                                                                   ));  
            
        }
        
        function interestGroupDelete($id, $group_name, $grouping_id = null){
            
            return $this->interestGroupDel($id, $group_name, $grouping_id);
            
        }
        
        function interestGroupUpdate($id, $old_name, $new_name, $grouping_id = null){
            
            return $this->client->request('lists/interest-group-update', array(
                                                                    'id' => $id, 
                                                                    'old_name' => $old_name, 
                                                                    'new_name' => $new_name, 
                                                                    'grouping_id' => $grouping_id,
                                                                   ));  
            
        }
        
        function interestGroupingAdd($id, $name, $type, $groups){
            
            return $this->client->request('lists/interest-grouping-add', array(
                                                                    'id' => $id, 
                                                                    'name' => $name, 
                                                                    'type' => $type, 
                                                                    'groups' => $groups,
                                                                   ));  
            
        }
        
        function interestGroupingDel($grouping_id){
            
            return $this->client->request('lists/interest-grouping-del', array('grouping_id' => $grouping_id));  
            
        }
        
        function interestGroupingDelete($grouping_id){
            
            return $this->interestGroupingDel($grouping_id);
            
        }
        
        function interestGroupingUpdate($grouping_id, $name, $value){
            
            return $this->client->request('lists/interest-grouping-update', array(
                                                                    'grouping_id' => $grouping_id, 
                                                                    'name' => $name, 
                                                                    'value' => $value,
                                                                   )); 
            
        }
        
        function interestGroupings($id, $counts = false){
            
            return $this->client->request('lists/interest-groupings', array('id' => $id, 'counts' => $counts));  
            
        }
        
        function listing($filters = array(), $start = 0, $limit = 25, $sort_field = null, $sort_dir = 'DESC'){
            
            return $this->client->request('lists/list', array(
                                                                    'filters' => $filters, 
                                                                    'start' => $start, 
                                                                    'limit' => $limit, 
                                                                    'sort_field' => $sort_field,
                                                                    'sort_dir' => $sort_dir
                                                                 ));
        }
        
        function locations($id){
            
            return $this->client->request('lists/locations', array('id' => $id));  
            
        }
        
        function memberActivity($id, $emails){
            
            return $this->client->request('lists/member-activity', array('id' => $id, 'emails' => $emails));  
            
        }
        
        function memberInfo($id, $emails){
            
            return $this->client->request('lists/member-info', array('id' => $id, 'emails' => $emails));  
            
        }
        
        function members($id, $status = 'subscribed', $opts = array()){
            
            return $this->client->request('lists/members', array(
                                                                    'id' => $id, 
                                                                    'status' => $status, 
                                                                    'opts' => $opts,
                                                                 ));  
            
        }
        
        function mergeVarAdd($id, $tag, $name, $options = array()){
            
            return $this->client->request('lists/merge-var-add', array(
                                                                    'id' => $id, 
                                                                    'tag' => $tag, 
                                                                    'name' => $name, 
                                                                    'options' => $options,
                                                                 ));  
            
        }
        
        function mergeVarDel($id, $tag){
            
            return $this->client->request('lists/merge-var-del', array('id' => $id, 'tag' => $tag));  
            
        }
        
        function mergeVarDelete($id, $tag){
            
            return $this->mergeVarDel($id, $tag);
            
        }
        
        function mergeVarReset($id, $tag){
            
            return $this->client->request('lists/merge-var-reset', array('id' => $id, 'tag' => $tag));  
            
        }
        
        function mergeVarSet($id, $tag, $value){
            
            return $this->client->request('lists/merge-var-set', array(
                                                                    'id' => $id, 
                                                                    'tag' => $tag,
                                                                    'value' => $value,
                                                                 ));  
            
        }
        
        function mergeVarUpdate($id, $tag, $options){
            
            return $this->client->request('lists/merge-var-update', array(
                                                                    'id' => $id, 
                                                                    'tag' => $tag,
                                                                    'options' => $options,
                                                                 ));  
            
        }
        
        function mergeVars(array $id){
            
            return $this->client->request('lists/merge-vars', array('id' => $id));  
            
        }
        
        function staticSegmentAdd($id, $name){
            
            return $this->client->request('lists/static-segment-add', array('id' => $id, 'name' => $name));  
            
        }
        
        function staticSegmentDel($id, $seg_id){
            
            return $this->client->request('lists/static-segment-del', array('id' => $id, 'seg_id' => $seg_id));  
            
        }
        
        function staticSegmentMembersAdd($id, $seg_id, array $batch){
            
            return $this->client->request('lists/static-segment-members-add', array(
                                                                    'id' => $id, 
                                                                    'seg_id' => $seg_id,
                                                                    'batch' => $batch
                                                                ));  
            
        }        
        function staticSegmentMembersDel($id, $seg_id, array $batch){
            
            return $this->client->request('lists/static-segment-members-del', array(
                                                                    'id' => $id, 
                                                                    'seg_id' => $seg_id,
                                                                    'batch' => $batch
                                                                ));  
            
        }
        
        function staticSegmentMembersDelete($id, $seg_id, array $batch){

            return $this->staticSegmentMembersDel($id, $seg_id, $batch);
            
        }
        
        function staticSegmentReset($id, $seg_id){
            
            return $this->client->request('lists/static-segment-reset', array('id' => $id, 'seg_id' => $seg_id));  
            
        }
        
        function staticSegments($id){
            
            return $this->client->request('lists/static-segments', array('id' => $id));  
            
        }
        
        function subscribe($id, $email, $merge_vars = array(), $email_type = 'html', $double_optin = true, $update_existing = false, $replace_interests = true, $send_welcome = false){
            
            return $this->client->request('lists/subscribe', array(
                                                                    'id' => $id, 
                                                                    'email' => $email, 
                                                                    'merge_vars' => $merge_vars, 
                                                                    'email_type' => $email_type, 
                                                                    'double_optin' => $double_optin,
                                                                    'update_existing' => $update_existing,
                                                                    'replace_intersts' => $replace_interests,
                                                                    'send_welcome' => $send_welcome,
                                                                   ));  
            
        }
        
        function unsubscribe($id, $email, $delete_member = false, $send_goodbye = true, $send_notify = true){
            
            return $this->client->request('lists/unsubscribe', array(
                                                                    'id' => $id, 
                                                                    'email' => $email, 
                                                                    'delete_member' => $delete_member,
                                                                    'send_goodbye' => $send_goodbye,
                                                                    'send_notify' => $send_notify,
                                                                   ));  
            
        }
        
        function updateMember($id, $email, $merge_vars = array(), $email_type = 'html', $replace_interests = true){
            
            return $this->client->request('lists/update-member', array(
                                                                    'id' => $id, 
                                                                    'email' => $email, 
                                                                    'merge_vars' => $merge_vars, 
                                                                    'email_type' => $email_type, 
                                                                    'replace_intersts' => $replace_interests,
                                                                   ));  
            
        }    
        
        function webhookAdd($id, $url, array $actions = array(), array $sources = array()){
            
            return $this->client->request('lists/webhook-add', array(
                                                                    'id' => $id, 
                                                                    'url' => $url, 
                                                                    'actions' => $actions,
                                                                    'sources' => $sources,
                                                                   ));  
            
        }
        
        function webhookDel($id, $url){
            
            return $this->client->request('lists/webhook-del', array('id' => $id, 'url' => $url));  
            
        }
        
        function webhookDelete($id, $url){
            
            return $this->webhookDel($id, $url);
            
        }
        
        function webhooks($id){
            
            return $this->client->request('lists/webhooks', array('id' => $id));  
            
        }        
    }