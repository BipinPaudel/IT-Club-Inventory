<?php
App::uses('AppController', 'Controller');
// itinventory
/**
 * Items Controller
 *
 * @property Item $Item
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ItemsController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Session');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index($id=null) {
//		if(!$id){
//                    throw new NotFoundException(__('Id was not set'));
//                }
                $data=$this->Item->find('all',array('order'=>'created',
                   'conditions'=>array('category_id LIKE' => '%'.$id .'%') ));
                $this->set('items',$data);
                            
                
               
                
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Item->exists($id)) {
			throw new NotFoundException(__('Invalid item'));
		}
		$options = array('conditions' => array('Item.' . $this->Item->primaryKey => $id));
		$this->set('item', $this->Item->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Item->create();
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		}
                
                $this->set('categories',$this->Item->Category->find('list',
                        array('order'=>'name')));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
        public function edit($id=null){
            if(!$id){
                throw new NotFoundException(__('Id was not set'));
            }
            
            $data=$this->Item->findById($id);
            if(!$data){
                throw new NotFoundException(__('Not found in database'));
            }
            if($this->request->is('post') || $this->request->is('put') ){
                if($this->Item->save($this->request->data)){
                $this->Session->setFlash('The data has been edited successfully');
                return $this->redirect(array('action' => 'index'));
                //$this->redirect('index');
            }
                else{
                    $this->Session->setFlash("The item could not be saved successfully");
                    $this->redirect('index');
                }
            }
          
            $this->set('categories',$this->Item->Category->find('list',
                    array('order'=>'name')));
            $this->request->data=$data;
       }

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Item->delete()) {
			$this->Session->setFlash(__('The item has been deleted.'));
		} else {
			$this->Session->setFlash(__('The item could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
