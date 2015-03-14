<h1>Edit item</h1>
<?php 
    echo $this->Form->create('Item');
    echo $this->Form->input('category_id');
    echo $this->Form->input('title');
    echo $this->Form->input('count');
    echo $this->Form->input('description');
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->end('Update item');

?>