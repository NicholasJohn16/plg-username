<?php

jimport('joomla.plugin.plugin'); 

class plgSystemUsername extends JPlugin 


{


	public function onAfterRoute() { 

	//if it's the back-end then ignore 
		// if ( JFactory::getApplication()->isAdmin() ) return;

//map the actor helper class to a custom class PlgSystemActorhelper 
		KService::setAlias('com://site/actors.template.helper','plg://site/system.username.helper'); 
	} 
} 