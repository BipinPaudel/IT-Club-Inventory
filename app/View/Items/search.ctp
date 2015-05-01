<?php
echo $this->Form->create();
echo $this->Form->input('name'); 
//echo $this->Form->end(__('Search'),$this->requestAction(array('controller' => 'items', 'action' => 'search_item')));
echo $this->Form->end(__('Search'));

?>