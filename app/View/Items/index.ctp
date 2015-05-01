<?php if ($count>0) : ?>
<?php echo $this->Html->script('search'); ?>
<div class="items">
	
    <h4 align="right">	<li align="right">
        <?php echo $this->Html->link(__('Add New Item'), array('action' => 'add')); ?></li></h4>
	
    <h2><?php echo __('Items'); ?></h2>

       <?php echo $this->Html->link(__('Search'),array('action'=>'search')); ?>
    
    <section class="container">
    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Search">
	<table cellpadding="0" cellspacing="0" class='order-table table'>
	<thead>
	<tr>
		
            <th><h3><?php echo $this->Paginator->sort('Title'); ?></h3></th>
        
         <th><h3><?php echo $this->Paginator->sort('Count'); ?></h3> </th>
        <th><?php echo $this->Paginator->sort('Status','Item.status'); ?></th>
        <th><h3><?php echo $this->Paginator->sort('Location');?> </h3></th>
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
		
		<td><?php echo h($item['Item']['count']); ?>&nbsp;</td>
                <td><?php  echo h($item['Item']['status']); ?> &nbsp;</td>
                <td> <?php echo h($item['Item']['location']); ?> &nbsp; </td>
                
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
</section>
	
</div>
<?php else: ?>
<h2>No any items in this category</h2> 
<div class="actions"><ul>
        <li>    <?php echo $this->Html->link(__('Add'),array('action'=>'add')); ?></li>
<li><?php echo $this->Html->link(__('Go back'),array('controller'=>'categories','action'=>'index')); ?></li>
</ul>    
</div>
<?php endif; ?>


