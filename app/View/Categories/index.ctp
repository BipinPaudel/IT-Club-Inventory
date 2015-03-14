<h2>List of Categories</h2>
<h4><li align="right"><?php echo $this->Html->link(__('Add New Category'), array('action' => 'add')); ?></li></h4>
<div class="table-responsive">
<table class="table">
    <thead>
            <tr>
                
                <td><h3>Name</h3></td>
            <td><h3>Actions</h3></td>
        </tr>
    </thead>
    <tbody>
    <?php foreach($categories as $category): ?>
    <tr>
        
        
        <td> <?php echo $this->Html->link($category['Category']['name'],
                array('controller'=>'items','action'=>'index',$category['Category']['id']));?>   </td>
        <td>  <?php echo $this->Html->link(__('Edit'),array('action'=>'edit',$category['Category']['id'])); ?> 
                
        | 
        <?php echo $this->Form->postLink(__('Delete'),array('action'=>'delete',$category['Category']['id']),
                array(), __('Are you sure you want to delete # %s ?', $category['Category']['id'])); ?>
            
        </td>
    </tr>
    <?php endforeach; ?>
    </tbody>
</table>
    </div>

	<ul>
	
	</ul>
