<?php
App::uses('AppController', 'Controller');
/**
 * UsersStages Controller
 *
 * @property UsersStage $UsersStage
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersStagesController extends AppController {

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
		$this->UsersStage->recursive = 0;
		$this->set('usersStages', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsersStage->exists($id)) {
			throw new NotFoundException(__('Invalid users stage'));
		}
		$options = array('conditions' => array('UsersStage.' . $this->UsersStage->primaryKey => $id));
		$this->set('usersStage', $this->UsersStage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersStage->create();
			if ($this->UsersStage->save($this->request->data)) {
				$this->Session->setFlash(__('The users stage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users stage could not be saved. Please, try again.'));
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
		if (!$this->UsersStage->exists($id)) {
			throw new NotFoundException(__('Invalid users stage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsersStage->save($this->request->data)) {
				$this->Session->setFlash(__('The users stage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users stage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersStage.' . $this->UsersStage->primaryKey => $id));
			$this->request->data = $this->UsersStage->find('first', $options);
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
		$this->UsersStage->id = $id;
		if (!$this->UsersStage->exists()) {
			throw new NotFoundException(__('Invalid users stage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsersStage->delete()) {
			$this->Session->setFlash(__('The users stage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The users stage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
