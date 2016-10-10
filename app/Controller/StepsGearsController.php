<?php
App::uses('AppController', 'Controller');
/**
 * StepsGears Controller
 *
 * @property StepsGear $StepsGear
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StepsGearsController extends AppController {

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
		$this->StepsGear->recursive = 0;
		$this->set('stepsGears', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->StepsGear->exists($id)) {
			throw new NotFoundException(__('Invalid steps gear'));
		}
		$options = array('conditions' => array('StepsGear.' . $this->StepsGear->primaryKey => $id));
		$this->set('stepsGear', $this->StepsGear->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->StepsGear->create();
			if ($this->StepsGear->save($this->request->data)) {
				$this->Session->setFlash(__('The steps gear has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The steps gear could not be saved. Please, try again.'));
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
		if (!$this->StepsGear->exists($id)) {
			throw new NotFoundException(__('Invalid steps gear'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->StepsGear->save($this->request->data)) {
				$this->Session->setFlash(__('The steps gear has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The steps gear could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('StepsGear.' . $this->StepsGear->primaryKey => $id));
			$this->request->data = $this->StepsGear->find('first', $options);
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
		$this->StepsGear->id = $id;
		if (!$this->StepsGear->exists()) {
			throw new NotFoundException(__('Invalid steps gear'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->StepsGear->delete()) {
			$this->Session->setFlash(__('The steps gear has been deleted.'));
		} else {
			$this->Session->setFlash(__('The steps gear could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
