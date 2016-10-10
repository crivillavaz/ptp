<?php
App::uses('AppController', 'Controller');
/**
 * Risks Controller
 *
 * @property Risk $Risk
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RisksController extends AppController {

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
		$this->Risk->recursive = 0;
		$this->set('risks', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Risk->exists($id)) {
			throw new NotFoundException(__('Invalid risk'));
		}
		$options = array('conditions' => array('Risk.' . $this->Risk->primaryKey => $id));
		$this->set('risk', $this->Risk->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Risk->create();
			if ($this->Risk->save($this->request->data)) {
				$this->Session->setFlash(__('The risk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The risk could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Risk->Job->find('list');
		$permissions = $this->Risk->Permission->find('list');
		$options = $this->Risk->Option->find('list');
		$this->set(compact('jobs', 'permissions', 'options'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Risk->exists($id)) {
			throw new NotFoundException(__('Invalid risk'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Risk->save($this->request->data)) {
				$this->Session->setFlash(__('The risk has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The risk could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Risk.' . $this->Risk->primaryKey => $id));
			$this->request->data = $this->Risk->find('first', $options);
		}
		$jobs = $this->Risk->Job->find('list');
		$permissions = $this->Risk->Permission->find('list');
		$options = $this->Risk->Option->find('list');
		$this->set(compact('jobs', 'permissions', 'options'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Risk->id = $id;
		if (!$this->Risk->exists()) {
			throw new NotFoundException(__('Invalid risk'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Risk->delete()) {
			$this->Session->setFlash(__('The risk has been deleted.'));
		} else {
			$this->Session->setFlash(__('The risk could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
