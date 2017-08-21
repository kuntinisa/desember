<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*!
* HybridAuth
* http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
* (c) 2009-2012, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
*/

// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

$config =
	array(
		// set on "base_url" the relative url that point to HybridAuth Endpoint
		'base_url' => '/hauth/endpoint',

		"providers" => array (
			// openid providers
			"OpenID" => array (
				"enabled" => true
			),

			"Yahoo" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" ),
			),

			"AOL"  => array (
				"enabled" => true
			),

			"Google" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "987353039696-hvh8bdpv2rnqtm1qj7m8u04ts3n5bu2m.apps.googleusercontent.com", "secret" => "Xba3IHG6hu0RHsq9bFPBm0W-" ),
				// https://console.developers.google.com/apis/credentials/oauthclient/987353039696-hvh8bdpv2rnqtm1qj7m8u04ts3n5bu2m.apps.googleusercontent.com?project=myprofilevip-166416
			),

			"Facebook" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "1727062460957299", "secret" => "c1b409c2a9563c5659a43aaa8c9366df" ),
				// https://www.facebook.com/dialog/oauth?client_id=1727062460957299&redirect_uri=http%3A%2F%2F%5B%3A%3A1%5D%2Fdesember_other%2Fhybrid%2Findex.php%2Fhauth%2Fendpoint%3Fhauth.done%3DFacebook&state=a025e23776191e0b7986d1042d21e4fd&scope=email%2C+user_about_me%2C+user_birthday%2C+user_hometown%2C+user_website%2C+read_stream%2C+offline_access%2C+publish_stream%2C+read_friendlists&display=page
			),

			"Twitter" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "QNadRAkqs8tzDMgBviVC3dr5y", "secret" => "OH39eUdj5R7SGSFeY1ebQ9SPFtEVOET7fulXw1Lr7w9DkanItd" ), 
				"includeEmail" => true,
			),

			// windows live
			"Live" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" )
			),

			"MySpace" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" )
			),

			"LinkedIn" => array (
				"enabled" => true,
				"keys"    => array ( "key" => "", "secret" => "" )
			),

			"Foursquare" => array (
				"enabled" => true,
				"keys"    => array ( "id" => "", "secret" => "" )
			),
		),

		// if you want to enable logging, set 'debug_mode' to true  then provide a writable file by the web server on "debug_file"
		"debug_mode" => (ENVIRONMENT == 'development'),

		"debug_file" => APPPATH.'/logs/hybridauth.log',
	);


/* End of file hybridauthlib.php */
/* Location: ./application/config/hybridauthlib.php */