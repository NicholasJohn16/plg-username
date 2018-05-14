<?php

class plgSystemUsername extends PlgAnahitaDefault 
{
	public function onBeforeDispatch() { 
		//map the actor helper class to a custom class PlgSystemActorhelper 
		KService::setAlias('com:actors.template.helper','plg://site/system.username.helper'); 
		KService::setAlias('com://site/actors.template.helper.story','plg://site/system.username.story');
	} 
} 