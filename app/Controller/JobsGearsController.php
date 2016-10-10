<?php
App::uses('AppController', 'Controller');
/**
 * JobsGears Controller
 *
 * @property JobsGear $JobsGear
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class JobsGearsController extends AppController {

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
		$this->JobsGear->recursive = 0;
		$this->set('jobsGears', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->JobsGear->exists($id)) {
			throw new NotFoundException(__('Invalid jobs gear'));
		}
		$options = array('conditions' => array('JobsGear.' . $this->JobsGear->primaryKey => $id));
		$this->set('jobsGear', $this->JobsGear->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->JobsGear->create();
			if ($this->JobsGear->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs gear has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs gear could not be saved. Please, try again.'));
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
		if (!$this->JobsGear->exists($id)) {
			throw new NotFoundException(__('Invalid jobs gear'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->JobsGear->save($this->request->data)) {
				$this->Session->setFlash(__('The jobs gear has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The jobs gear could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('JobsGear.' . $this->JobsGear->primaryKey => $id));
			$this->request->data = $this->JobsGear->find('first', $options);
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
		$this->JobsGear->id = $id;
		if (!$this->JobsGear->exists()) {
			throw new NotFoundException(__('Invalid jobs gear'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->JobsGear->delete()) {
			$this->Session->setFlash(__('The jobs gear has been deleted.'));
		} else {
			$this->Session->setFlash(__('The jobs gear could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
