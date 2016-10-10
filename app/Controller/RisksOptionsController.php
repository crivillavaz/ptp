<?php
App::uses('AppController', 'Controller');
/**
 * RisksOptions Controller
 *
 * @property RisksOption $RisksOption
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class RisksOptionsController extends AppController {

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
		$this->RisksOption->recursive = 0;
		$this->set('risksOptions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->RisksOption->exists($id)) {
			throw new NotFoundException(__('Invalid risks option'));
		}
		$options = array('conditions' => array('RisksOption.' . $this->RisksOption->primaryKey => $id));
		$this->set('risksOption', $this->RisksOption->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->RisksOption->create();
			if ($this->RisksOption->save($this->request->data)) {
				$this->Session->setFlash(__('The risks option has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The risks option could not be saved. Please, try again.'));
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
		if (!$this->RisksOption->exists($id)) {
			throw new NotFoundException(__('Invalid risks option'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->RisksOption->save($this->request->data)) {
				$this->Session->setFlash(__('The risks option has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The risks option could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('RisksOption.' . $this->RisksOption->primaryKey => $id));
			$this->request->data = $this->RisksOption->find('first', $options);
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
		$this->RisksOption->id = $id;
		if (!$this->RisksOption->exists()) {
			throw new NotFoundException(__('Invalid risks option'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->RisksOption->delete()) {
			$this->Session->setFlash(__('The risks option has been deleted.'));
		} else {
			$this->Session->setFlash(__('The risks option could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
