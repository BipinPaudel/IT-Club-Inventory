<?php
App::uses('AppModel', 'Model');
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Category
 *
 * @author Bipin
 */
class Category extends AppModel{
    public $actsAs=array('Search.Searchable');
    public $filterArgs=array(
        'name'=>array(
            'type'=>'like',
            'field'=>'name'
        )
    );
    public $displayField='name';
    
    public $hasMany='Item';
    
    
}
