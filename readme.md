#Mailchimp API v2 PHP Wrapper

This PHP library wraps version 2 of Mailchimp's API. The library closely follows the documentation at http://apidocs.mailchimp.com/api/2.0/

##Requirements

* PHP >= 5.3
* cURL module

##Version 0.9
This is wrapper is currently undergoing testing, and is considered beta, but will be in production shortly. Issues will be resolved quickly as they present themselves.

##Convention
Version 2 of Mailchimp's API is divided into nine sections: Campaigns, Ecomm, Folders, Lists, Helper, Reports, Templates, User and Vip. (http://apidocs.mailchimp.com/api/2.0/#method-sections) This library implements each of those as properties of the client and can be accessed accordingly:

* $mc->campaigns->method();
* $mc->ecomm->method();

Methods and arguments are mapped identically to Mailchimp's API documentation so that should provide clear instruction on using this wrapper.

##Usage

###Create a New Campaign

	$mc = new Mailchimp\Client('Api Key');

	$result = $mc->campaigns->create(
                                    'regular', 
                                    array(
                                            'list_id' => 'YOUR LIST ID',
                                            'subject' => 'Test Campaign '.date('m/d/y g:ia'),
                                            'from_email' => 'you@yourdomain.com',
                                            'from_name' => 'Test Sender',
                                            'to_name' => 'Test Recipient',
                                    ),
                                    array(  'html' => '<p>Test Campaign Message</p>')
                                  );

###Send a Campaign
	
	$mc = new Mailchimp\Client('Api Key');
	$mc->campaigns->send($campaign_id);

###oAuth2

Mailchimp allows you to use an oAuth2 token in place of an API Key, but the datacenter can't be extracted from an oAuth token, so you can set it as a second optional argument of the Mailchimp\Client constructor.

	$mc = new Mailchimp\Client('oAuth2 Token', 'us1');

If you don't know your datacenter, you can find out like this: 

	$mc = new Mailchimp\Client('oAuth2 Token');
	$result = $mc->oauth2->metadata();
	echo $result->dc;