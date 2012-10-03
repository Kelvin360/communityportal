<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller 
{
	public function beforeFilter()
	{	
	  // Override any of the following default options to customize your map
	  $map_options = array(
	    'id' => 'map_canvas',        
	    'width' => '100%', 
	    'height' => '100%',
	    'style' => '',
	    'zoom' => 18,
	    'type' => 'HYBRID', //options:: ROADMAP`, `SATELLITE`, `HYBRID` or `TERRAIN`
	    'custom' => null,
	    'localize' => true, //if true: latitude, longitude and address are been overrriden.
	    'latitude' => 40.69847032728747,
	    'longitude' => -1.9514422416687,
	    'address' => '1 Infinite Loop, Cupertino',
	    'marker' => true,
	    'markerTitle' => 'This is my position',
	    'markerIcon' => 'http://google-maps-icons.googlecode.com/files/home.png',
	    'markerShadow' => 'http://google-maps-icons.googlecode.com/files/shadow.png',
	    'infoWindow' => true,
	    'windowText' => 'My Position'
	  );
	
	  $marker_options = array(
	    'showWindow' => true,
	    'windowText' => 'This is the Marker TEXT',
	    'markerTitle' => 'This is the marker TITLE',
	    'markerIcon' => 'http://www.smsaruba.com/business.png',
	//'http://labs.google.com/ridefinder/images/mm_20_purple.png',
	    'markerShadow' => 'http://labs.google.com/ridefinder/images/mm_20_purpleshadow.png',
	  );	
	
	  $directions_options = array(
	    'travelMode' => "WALKING",
	    'directionsDiv' => 'directions',
	  );		
		
		$this->set('map_options', $map_options);
		$this->set('marker_options', $marker_options);
		$this->set('directions_options', $directions_options);
		$this->set('base_url', Configure::read('system.root'));		
	}
	
}
