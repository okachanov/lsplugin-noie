<?php

$config	= array();

// Версия Internet Explorer, начиная с которой пользователи не будут видеть сообщения
// 8 - Сообщения видят пользователи ie7 и ie6
// 7 - Сообщения видят пользователи ie6
$config['max_ie_version']	= 8;

// Через какой период в секундах напоминать пользователю повторно
// По умолчанию пользователь увидит напоминание спустя 1 сутки
$config['message_interval']	= 1 *24 *60 *60 ;

return $config;

?>