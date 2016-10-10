<?php
App::uses('AppController', 'Controller');
/**
 * PermissionsRisks Controller
 *
 * @property PermissionsRisk $PermissionsRisk
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PermissionsRisksController extends AppController {

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
		$this->PermissionsRisk->recursive = 0;
		$this->set('permissionsRisks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PermissionsRisk->exists($id)) {
			throw new NotFoundException(__('Invalid permissions risk'));
		}
		$options = array('conditions' => array('PermissionsRisk.' . $this->PermissionsRisk->primaryKey => $id));
		$this->set('permissionsRisk', $this->PermissionsRisk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PermissionsRisk->create();
			if ($this->PermissionsRisk->save($this->request->data)) {
				$this->Session->setFlash(__('The permissions risk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permissions risk could not be saved. Please, try again.'));
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
		if (!$this->PermissionsRisk->exists($id)) {
			throw new NotFoundException(__('Invalid permissions risk'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->PermissionsRisk->save($this->request->data)) {
				$this->Session->setFlash(__('The permissions risk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The permissions risk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PermissionsRisk.' . $this->PermissionsRisk->primaryKey => $id));
			$this->request->data = $this->PermissionsRisk->find('first', $options);
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
		$this->PermissionsRisk->id = $id;
		if (!$this->PermissionsRisk->exists()) {
			throw new NotFoundException(__('Invalid permissions risk'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->PermissionsRisk->delete()) {
			$this->Session->setFlash(__('The permissions risk has been deleted.'));
		} else {
			$this->Session->setFlash(__('The permissions risk could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
