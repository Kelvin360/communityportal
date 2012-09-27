<?php

class GoogleController extends AppController
{
	public $name	=	'Google';
	
	public function beforeFilter()
	{
		parent::beforeFilter();
	}
	
	public function map($from = '', $to = '') 
	{
		$this->layout		=	'ajax';
		
		$this->set('from', str_replace('+', ' ', $from));
		$this->set('to', str_replace('+', ' ', $to));
	}
	
	public function activity($from = '', $to = '')
	{
		$this->layout		=	'ajax';
		
		$this->set('from', str_replace('+', ' ', $from));
		$this->set('to', str_replace('+', ' ', $to));
	}
}