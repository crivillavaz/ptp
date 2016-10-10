<?php
App::uses('AppController', 'Controller');
/**
 * PermissionsRules Controller
 *
 * @property PermissionsRule $PermissionsRule
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PermissionsRulesController extends AppController {

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
		$this->PermissionsRule->recursive = 0;
		$this->set('permissionsRules', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PermissionsRule->exists($id)) {
			throw new NotFoundException(__('Invalid permissions rule'));
		}
		$options = array('conditions' => array('PermissionsRule.' . $this->PermissionsRule->primaryKey => $id));
		$this->set('permissionsRule', $this->PermissionsRule->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PermissionsRule->create();
			if ($this->PermissionsRule->save($this->request->data)) {
				$this->Session->setFlash(__('The permissions rule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permissions rule could not be saved. Please, try again.'));
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
		if (!$this->PermissionsRule->exists($id)) {
			throw new NotFoundException(__('Invalid permissions rule'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PermissionsRule->save($this->request->data)) {
				$this->Session->setFlash(__('The permissions rule has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permissions rule could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PermissionsRule.' . $this->PermissionsRule->primaryKey => $id));
			$this->request->data = $this->PermissionsRule->find('first', $options);
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
		$this->PermissionsRule->id = $id;
		if (!$this->PermissionsRule->exists()) {
			throw new NotFoundException(__('Invalid permissions rule'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PermissionsRule->delete()) {
			$this->Session->setFlash(__('The permissions rule has been deleted.'));
		} else {
			$this->Session->setFlash(__('The permissions rule could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
