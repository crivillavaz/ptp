<?php
App::uses('AppController', 'Controller');
/**
 * Contractors Controller
 *
 * @property Contractor $Contractor
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class ContractorsController extends AppController {

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
	public function index() {
		$this->Contractor->recursive = 0;
		$this->set('contractors', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Contractor->exists($id)) {
			throw new NotFoundException(__('Invalid contractor'));
		}
		$options = array('conditions' => array('Contractor.' . $this->Contractor->primaryKey => $id));
		$this->set('contractor', $this->Contractor->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Contractor->create();
			if ($this->Contractor->save($this->request->data)) {
				$this->Session->setFlash(__('The contractor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contractor could not be saved. Please, try again.'));
			}
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
		if (!$this->Contractor->exists($id)) {
			throw new NotFoundException(__('Invalid contractor'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Contractor->save($this->request->data)) {
				$this->Session->setFlash(__('The contractor has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The contractor could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Contractor.' . $this->Contractor->primaryKey => $id));
			$this->request->data = $this->Contractor->find('first', $options);
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
		$this->Contractor->id = $id;
		if (!$this->Contractor->exists()) {
			throw new NotFoundException(__('Invalid contractor'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Contractor->delete()) {
			$this->Session->setFlash(__('The contractor has been deleted.'));
		} else {
			$this->Session->setFlash(__('The contractor could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
