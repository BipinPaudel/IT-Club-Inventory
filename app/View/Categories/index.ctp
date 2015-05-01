<?php echo $this->Html->script('search'); ?>
<?php echo $this->Html->css('jquery.dataTables.min'); ?>
<?php echo $this->Html->script('jquery.dataTables.min');  ?>
<script>
    $(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
<h2>List of Categories</h2>
<h4 align="right"><li align="right"><?php echo $this->Html->link(__('Add New Category'), 
        array('action' => 'add')); ?></li></h4>
           
<section class="container">
<!--<div class="table-responsive">-->
    <input type="search" class="light-table-filter" data-table="order-table" placeholder="Search">
    <table cellpadding="0" cellspacing="0" class="order-table table" id="table_id"><!--class="order-table table"-->
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
    <!--</div>-->
</section>
	