<?php 

jimport('joomla.plugin.plugin'); 

class PlgSystemUsernameHelper extends ComActorsTemplateHelper {


	public function name($actor, $linked = true, $attr = array()) 
	{ 
		//the actor name 
		$name = parent::name($actor, $linked, $attr);

		if ( is_person($actor) ) 
		{

			if(is_null($actor) || !isset($actor->id))
			{
				$linked = false;
				$name = '<span class="actor-name">'.JText::_('LIB-AN-UNKOWN-PERSON').'</span>';
			} 
			else 
			{		
				$name = '<span class="actor-name" actorid="'.$actor->id.'">'.$actor->username.'</span>';
			}
					
			if(!$linked || !$actor->authorize('access')) 
				return (string) $name;
			
			$url = $this->getActorURL($actor);

			if(is_person($actor))
				$attr['title'] = '@'.$actor->username;
			
			$name = '<a class="actor-name" '.$this->_buildAttribute($attr).' actorid="'.$actor->id.'" href="'.$url.'" >'.$name.'</a>';
		}

		return $name; 
	}
		
} 