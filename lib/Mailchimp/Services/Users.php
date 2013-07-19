<?php   
    
    namespace Mailchimp\Services;
    
    class Users extends \Mailchimp\Service{
        
        function invite($email, $role = 'viewer', $msg = ''){
            
            return $this->client->request('users/invite', array(
                                                                    'email' => $email, 
                                                                    'role' => $role,
                                                                    'msg' => $msg,
                                                                    ));   
            
        } 
        
        function inviteResend($email){
            
            return $this->client->request('users/invite-resend', array('email' => $email));   
            
        }  
        
        function inviteRevoke($email){
            
            return $this->client->request('users/invite-revoke', array('email' => $email));   
            
        }  
        
        function invites(){
            
            return $this->client->request('users/invites', array());   
            
        }  
        
        function loginRevoke($username){
            
            return $this->client->request('users/login-revoke', array('username' => $username));   
            
        }         
        
        function logins(){
            
            return $this->client->request('users/logins', array());   
            
        }         
        
    }