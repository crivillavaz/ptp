<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class UsersController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('RequestHandler', 'Session');
	public $helpers = array('Html', 'Form', 'Time', 'Js');

	public function beforeFilter(){
		
		parent::beforeFilter();

		 $this->Auth->allow('add', 'edit', 'view');
	}

/**
 * index method
 *
 * @return void
 */

public function isAuthorized($user){
		if($user['role'] == 'supervisor'){
			if(in_array($this->action, array('index', 'add', 'welcome'))){
				return true;
			}
			else{
				if($this->Auth->user('id')){
					$this->Session->setFlash('No puede acceder', 'alert-box', array('class' => 'alert alert-danger'));

					$this->redirect($this->Auth->redirect());
				}
			}
		}
		if($user['role'] == 'lider'){
			if(in_array($this->action, array('index', 'welcome'))){
								return true;
			}
			else{
				if($this->Auth->user('id')){
					$this->Session->setFlash('No puede acceder', 'alert-box', array('class' => 'alert alert-success alert-dismissible'));

					$this->redirect($this->Auth->redirect());
				}
			}
		}

		return parent::isAuthorized($user);
	}


	public function login()
	{
		$this->layout = "login";
		if($this->request->is('post'))
		{
			if($this->Auth->login())
			{
				return $this->redirect($this->Auth->redirectUrl());
			}

			$this->Session->setFlash('Usuario y contraseña incorrectos!', 'alert-box', array('class' => 'alert alert-danger alert-dismissible'));
		}
	}

	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$uno = $this->User->find('all');
		$this->set('users', $uno);
	}

	public function administradores() {
		$this->User->recursive = 0;
		$administrador = $this->User->find('all', array('conditions' => array('User.role' => 'admin')));
		$this->set('administradores', $administrador);
	}

	public function trabajadores() {
		$this->User->recursive = 0;
		$trabajador = $this->User->find('all', array('conditions' => array('User.role' => 'trabajador')));
		$this->set('trabajadores', $trabajador);
	}

	public function supervisores() {
		$this->User->recursive = 0;
		$supervisor = $this->User->find('all', array('conditions' => array('User.role' => 'supervisor')));
		$this->set('supervisores', $supervisor);
	}

	public function lideres() {
		$this->User->recursive = 0;
		$lider = $this->User->find('all', array('conditions' => array('User.role' => 'lider')));
		$this->set('lideres', $lider);
	}

	public function vigilantes() {
		$this->User->recursive = 0;
		$vigilante = $this->User->find('all', array('conditions' => array('User.role' => 'vigilante')));
		$this->set('vigilantes', $vigilante);
	}

	public function ehs() {
		$this->User->recursive = 0;
		$ehs = $this->User->find('all', array('conditions' => array('User.role' => 'ehs')));
		$this->set('seguridad', $ehs);
	}

	public function welcome() {
		$this->User->recursive = 2;
		$this->loadModel('Permission');
		$this->loadModel('Stage');
		
		$ultimos_analisis = $this->Stage->find('all', array('limit' => 3));
		$this->set('stages', $ultimos_analisis);
		$ultimos_permisos = $this->Permission->find('all', array('limit' => 3));
		$this->set('permissions', $ultimos_permisos);

		}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
		$this->set('user', $this->User->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash('Usuario añadido con éxito', 'alert-box', array('class' => 'alert alert-success alert-dismissible'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		}
		$contractors = $this->User->Contractor->find('list');
		$permissions = $this->User->Permission->find('list');
		$courses = $this->User->Course->find('list');
		$stages = $this->User->Stage->find('list');
		$this->set(compact('contractors', 'permissions', 'courses', 'stages'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->User->exists($id)) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('User.' . $this->User->primaryKey => $id));
			$this->request->data = $this->User->find('first', $options);
		}
		$contractors = $this->User->Contractor->find('list');
		$permissions = $this->User->Permission->find('list');
		$courses = $this->User->Course->find('list');
		$stages = $this->User->Stage->find('list');
		$this->set(compact('contractors', 'permissions', 'courses', 'stages'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->User->delete()) {
			$this->Session->setFlash(__('The user has been deleted.'));
		} else {
			$this->Session->setFlash(__('The user could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
