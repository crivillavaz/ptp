<?php
App::uses('AppController', 'Controller');
/**
 * Gears Controller
 *
 * @property Gear $Gear
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class GearsController extends AppController {

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
		$this->Gear->recursive = 0;
		$this->set('gears', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Gear->exists($id)) {
			throw new NotFoundException(__('Invalid gear'));
		}
		$options = array('conditions' => array('Gear.' . $this->Gear->primaryKey => $id));
		$this->set('gear', $this->Gear->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Gear->create();
			if ($this->Gear->save($this->request->data)) {
				$this->Session->setFlash(__('The gear has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gear could not be saved. Please, try again.'));
			}
		}
		$jobs = $this->Gear->Job->find('list');
		$steps = $this->Gear->Step->find('list');
		$this->set(compact('jobs', 'steps'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Gear->exists($id)) {
			throw new NotFoundException(__('Invalid gear'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Gear->save($this->request->data)) {
				$this->Session->setFlash(__('The gear has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The gear could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Gear.' . $this->Gear->primaryKey => $id));
			$this->request->data = $this->Gear->find('first', $options);
		}
		$jobs = $this->Gear->Job->find('list');
		$steps = $this->Gear->Step->find('list');
		$this->set(compact('jobs', 'steps'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Gear->id = $id;
		if (!$this->Gear->exists()) {
			throw new NotFoundException(__('Invalid gear'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Gear->delete()) {
			$this->Session->setFlash(__('The gear has been deleted.'));
		} else {
			$this->Session->setFlash(__('The gear could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
