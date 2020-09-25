<?php
App::uses('AppController', 'Controller');
/**
 * Employees Controller
 *
 * @property Employee $Employee
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 * @property FlashComponent $Flash
 */
class EmployeesController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Time');

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session', 'Flash');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$conditions = array();
		if(!empty($this->request->data['Employee']['keyword'])){
		   $cond=array();
		   $cond['Employee.EmployeeName LIKE'] = "%" . trim($this->request->data['Employee']['keyword']) . "%";
		   $this->request->params['named']['Employee.keyword'] = $this->request->data['Employee']['keyword'];
		   $conditions['OR'] = $cond;
		 }
		$this->paginate=array('conditions'=>$conditions,'limit'=>'5');
		$this->Employee->recursive = 0;
		$this->set('employees', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
		$this->set('employee', $this->Employee->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Employee->create();
			$this->request->data['Employee']['EmployeeImage'] = $this->request->data['Employee']['EmployeeImage']['name'];
			//if(!empty($this->request->data['Employee']['EmployeeImage']) && is_uploaded_file($this->request->data['Employee']['EmployeeImage']['tmp_name'])){
				if ($this->Employee->save($this->request->data)) {
					$this->Flash->success(__('The employee has been saved.'));
					return $this->redirect(array('action' => 'index'));
				} else {
					$this->Flash->error(__('The employee could not be saved. Please, try again.'));
				}
			// }else {
			// 	$this->Flash->error(__('The employee could not be saved. Please, try again.'));
			// }
			
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Employee->exists($id)) {
			throw new NotFoundException(__('Invalid employee'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Employee->save($this->request->data)) {
				$this->Flash->success(__('The employee has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Flash->error(__('The employee could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Employee.' . $this->Employee->primaryKey => $id));
			$this->request->data = $this->Employee->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Employee->id = $id;
		if (!$this->Employee->exists()) {
			throw new NotFoundException(__('Invalid employee'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Employee->delete()) {
			$this->Flash->success(__('The employee has been deleted.'));
		} else {
			$this->Flash->error(__('The employee could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
