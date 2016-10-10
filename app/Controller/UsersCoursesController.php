<?php
App::uses('AppController', 'Controller');
/**
 * UsersCourses Controller
 *
 * @property UsersCourse $UsersCourse
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersCoursesController extends AppController {

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
		$this->UsersCourse->recursive = 0;
		$this->set('usersCourses', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->UsersCourse->exists($id)) {
			throw new NotFoundException(__('Invalid users course'));
		}
		$options = array('conditions' => array('UsersCourse.' . $this->UsersCourse->primaryKey => $id));
		$this->set('usersCourse', $this->UsersCourse->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->UsersCourse->create();
			if ($this->UsersCourse->save($this->request->data)) {
				$this->Session->setFlash(__('The users course has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users course could not be saved. Please, try again.'));
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
		if (!$this->UsersCourse->exists($id)) {
			throw new NotFoundException(__('Invalid users course'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->UsersCourse->save($this->request->data)) {
				$this->Session->setFlash(__('The users course has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users course could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('UsersCourse.' . $this->UsersCourse->primaryKey => $id));
			$this->request->data = $this->UsersCourse->find('first', $options);
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
		$this->UsersCourse->id = $id;
		if (!$this->UsersCourse->exists()) {
			throw new NotFoundException(__('Invalid users course'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->UsersCourse->delete()) {
			$this->Session->setFlash(__('The users course has been deleted.'));
		} else {
			$this->Session->setFlash(__('The users course could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
