<h1>List of Categories</h1>

<table>
    <thead>
        <tr>
            <td> Id number</td>
            <td>Name<td>
            <td>Actions</td>
        </tr>
    </thead>
    <?php foreach($categories as $category): ?>
    <tr>
        <td><?php echo h($category['Category']['id']);  ?></td>
        
        <td> <?php echo $this->Html->link($category['Category']['name'],
                array('controller'=>'items','action'=>'index',$category['Category']['id']));?>   </td>
        <td> <h4> <?php echo $this->Html->link(__('Edit'),array('action'=>'edit',$category['Category']['id'])); ?> 
                
        | 
        <?php echo $this->Html->link(__('Delete'),array('action'=>'delete',$category['Category']['id'])); ?>
            </h4>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<div class="actions">
	<ul>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?></li>
		</ul>
</div>