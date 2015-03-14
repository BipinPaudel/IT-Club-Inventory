<div class="items index">
<?php echo $this->Html->link('Home',
        array('controller'=>'items','action'=>'index'));
        ?>	
    <h2><?php echo __('Items'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
		
                        <th> title</th>
                        <th> created</th>
                        <th>modified</th>
                        <th>count</th>
                        <th>Actions</th>
                        <th>Description</th>
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
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $item['Item']['id']), array(), __('Are you sure you want to delete # %s?', $item['Item']['id'])); ?>
		</td>
                <td>
                    <?php echo h($item['Item']['description']); ?> &nbsp; 
                </td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	
	
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Item'), array('action' => 'add')); ?></li>
	</ul>
</div>
