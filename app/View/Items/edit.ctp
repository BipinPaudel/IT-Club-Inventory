<h1>Edit item</h1>
<?php 
    echo $this->Form->create('Item');
    echo $this->Form->input('category_id');
    echo $this->Form->input('title');
    echo $this->Form->input('count');
    $status_options=array('Ok'=>'Ok',
                    'Not Ok'=>'Not Ok');
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
                    
                ?> <?php
    echo $this->Form->input('description');
    echo $this->Form->input('id',array('type'=>'hidden'));
    echo $this->Form->end('Update item');

?>