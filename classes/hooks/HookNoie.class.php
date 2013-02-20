<?php

class PluginNoie_HookNoie extends Hook {

	public function RegisterHook() {
		$this->AddHook('template_body_begin', 'HookBodyBegin');
		$this->AddHook('init_action','HookInitAction');
	}
	
	//*************************************************************************************
	// Отрабатываем событие "отображение странички после тега <body>"
	// Проверяем установленную куку при ее отсутствии выводим сообщение 
	public function HookBodyBegin(){
	//	if(!isset($_COOKIE['noie_message'])){
			return $this->Viewer_Fetch(Plugin::GetTemplatePath(__CLASS__).'message.tpl');
	//	}
	}
	
	//*************************************************************************************
	// Ставим куку, которая сообщает о том, что сообщение уже выводилось пользователю, дабы
	// не преследовать его при каждом заходе на страничку
	// А находится установка куки в столь экстравагантном месте потому, что ставить куку
	// из JS в Internet Explorer у меня не получилось. Как символично.
	public function HookInitAction(){
		if(!isset($_COOKIE['noie_message'])){
			setcookie('noie_message','oh Hi!',time()+Config::Get('plugin.noie.message_interval'),Config::Get('sys.cookie.path'),Config::Get('sys.cookie.host'));
		}
	}


}

?>