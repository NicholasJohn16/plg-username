<?php

class plgSystemUsername extends PlgAnahitaDefault 
{
	public function onAfterRoute() { 
		//map the actor helper class to a custom class PlgSystemActorhelper 
		KService::setAlias('com://site/actors.template.helper','plg://site/system.username.helper'); 
		KService::setAlias('com://site/actors.template.helper.story','plg://site/system.username.story');
	} 
} 