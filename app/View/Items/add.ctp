<div class="actions">
	

    <h4><li align="right"><?php echo $this->Html->link(__('List Items'), array('action' => 'index')); ?></li></h4>
	
</div>
<div class="items form">
<?php echo $this->Form->create('Item'); ?>
	<fieldset>
		<legend><?php echo __('Add Item'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('count');
              
                $status_options=array('Used'=>'Used',
                    'Not used'=>'Not used');
                $attributes= array('legend'=>false,'required'=>true);
                
                echo "Status"; ?><br> <?php echo $this->Form->radio( 'status',$status_options,$attributes);
                 
             
                    $location_options=array('Computer Lab'=>'Computer lab',
                        'Library'=>'Library',
                        'Hitesh Karki'=>'Hitesk Karki',
                        'Amrit Silwal'=>'Amrit Silwal',
                        'Alok Koirala'=>'Alok Koirala',
                        'Administration' => 'Administration',
                         );
                    $location_attributes=array('default'=>'Computer Lab','required'=>true);
                echo "Location";?>
                <br>
                        <?php
                    echo $this->Form->select('location',$location_options,$location_attributes);
                    
                ?>
                
		<?php echo $this->Form->input('description');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>

