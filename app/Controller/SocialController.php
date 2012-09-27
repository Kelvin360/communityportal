<?php

class SocialController extends AppController
{
	public $name	=	'Social';
	
	public function beforeFilter()
	{
		parent::beforeFilter();
	}
	
	public function message()
	{
		$this->response->disableCache();
		$this->layout		=	'ajax';		
	}	
} ?>