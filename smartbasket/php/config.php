<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

//***SMTP***//
		  require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		  const HOST = 'ssl://smtp.mail.ru';
		 const LOGIN = 'bossbogdan2003@mail.ru';
		  const PASS = 'cykableat007';
		  const PORT = '465';
//***SMTP***//
   
    const SENDER = 'bossbogdan2003@mail.ru';
    const CATCHER = 'dasasxzxw1e12@mail.ru';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    
