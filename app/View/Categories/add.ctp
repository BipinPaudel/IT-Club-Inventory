<h1> Add category</h1>
<?php   
    echo $this->Form->create('Category');
    echo $this->Form->input('name');
    echo $this->Form->end('Add item');
?>