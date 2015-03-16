<div class="items">
	
    <h4 align="right">	<li align="right"><?php echo $this->Html->link(__('Add New Item'), array('action' => 'add')); ?></li></h4>
	<!--    <form class="navbar-form navbar-left" role="search" align='right'>
  <div class="form-group">
    <input type="text" class="form-control" placeholder="Search">
  
  <button type="submit" class="btn btn-default" action='search'>Submit</button></div>
</form>-->
    <h2><?php echo __('Items'); ?></h2>
    <div class='table-responsive'>
	<table cellpadding="0" cellspacing="0" class='table'>
	<thead>
	<tr>
		
            <th><h3> Title</h3></th>
            <th><h3> Created </h3></th>
            <th><h3>Modified</h3> </th>
            <th><h3>Count</h3> </th>
            <th><h3>Actions</h3> </th>
            <th><h3>Description</h3></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($items as $item): ?>
	<tr>
		
            <td>
		 <?php echo $this->Html->link($item['Item']['title'],
                         array('controller' => 'items','action'=>'view',$item['Item']['id']));?></td>
		<td><?php echo h($item['Item']['created']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['modified']); ?>&nbsp;</td>
		<td><?php echo h($item['Item']['count']); ?>&nbsp;</td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $item['Item']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $item['Item']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', 
                            $item['Item']['id'], $item['Item']['category_id']), array(), 
                                __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
		</td>
                <td>
                    <?php echo h($item['Item']['description']); ?> &nbsp; 
                </td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	</div>
	
</div>

