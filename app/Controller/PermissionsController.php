<?php
App::uses('AppController', 'Controller');
/**
 * Permissions Controller
 *
 * @property Permission $Permission
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class PermissionsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session','Wizard.Wizard', 'RequestHandler');
	public $helpers = array('Html', 'Form', 'Time', 'Js');

/**
 * index method
 *
 * @return void
 */

	public function beforeFilter(){
		
		parent::beforeFilter();

		 $this->Auth->allow('add', 'edit', 'view', 'index');
	} 

	public function index() {
		$this->Permission->recursive = 0;
		$this->set('permissions', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */

	public function view($id = null) {
		if (!$this->Permission->exists($id)) {
			throw new NotFoundException(__('Invalid stage'));
		}
		$options = array('conditions' => array('Permission.' . $this->Permission->primaryKey => $id));
		$this->set('permission', $this->Permission->find('first', $options));
		$this->pdfConfig = array(
			'download' => true,
			'filename' => 'permission_' . $id .'.pdf'
		);
	}


/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Permission->create();
			if ($this->Permission->save($this->request->data)) {
				$this->Session->setFlash('Permiso almacenado con éxito', 'alert-box', array('class' => 'alert alert-success alert-dismissible'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El permiso no fue almacenado :( intenta otra vez', 'alert-box', array('class' => 'alert alert-danger alert-dismissible'));
			}
		}
		$jobs = $this->Permission->Job->find('list');
		$contractors = $this->Permission->Contractor->find('list');
		$areas = $this->Permission->Area->find('list');
		$risks = $this->Permission->Risk->find('list');
		$rules = $this->Permission->Rule->find('list');
		$users = $this->Permission->User->find('list');
		$this->set(compact('jobs', 'contractors', 'areas', 'risks', 'rules', 'users'));
	}

	public function gracias() {
		$this->layout = 'ajax';
		$this->autoRender = 'gracias';
		if ($this->request->isPost()) {
        $this->Permission->create();
			if ($this->Permission->save($this->request->data)) {
				$this->set('bien', $this->Permission->getID());
			}
    	}
	}

	public function vista_previa($id = null) {
		$this->layout = 'ajax';
		$this->autoRender = 'vista_previa';
		if ($this->request->isPost()) {
			if (!$this->Permission->exists($id)) {
			throw new NotFoundException(__('Invalid stage'));
		}
		$options = array('conditions' => array('Permission.' . $this->Permission->primaryKey => $id));
		$this->set('permission', $this->Permission->find('first', $options));
    	}
		
	}

	function obtener_trabajadores()
    {
        $this->layout = 'ajax';
		$this->autoRender = 'obtener_trabajadores';
		$this->loadModel('Contractor');
		$this->loadModel('User');
		if ($this->request->isPost()) {
        $content = $this->request->data['content']; 
        $this->set('trabajadores', $this->User->find('list', array('conditions' => array('User.contractor_id' => $content, 'User.role' => 'trabajador'))));
    }
		
		
    }

    function obtener_reglas()
    {
        $this->layout = 'ajax';
		$this->autoRender = 'obtener_reglas';
		$this->loadModel('Rule');
		if ($this->request->isPost()) {
        $rule = $this->request->data['rule']; 
        $this->set('reglas', $this->Rule->find('list'));
    }
		
		
    }

    function obtener_riesgos()
    {
        $this->layout = 'ajax';
		$this->autoRender = 'obtener_riesgos';
		$this->loadModel('Risk');
		if ($this->request->isPost()) {
        $risk = $this->request->data['risk']; 
        $this->set('riesgos', $this->Risk->find('list'));
    }
		
		
    }

    public function obtener_lider(){
		

        $this->layout = 'ajax';
		$this->autoRender = 'obtener_lider';
		$this->loadModel('User');
		if ($this->request->isPost()) {
        $lider = $this->request->data['lider']; 
        $this->set('lider', $this->User->find('list', array('conditions' => array('User.role' => 'lider'))));
    }
        
		
	}

	public function autorizar_ehs(){
		

        $this->layout = 'ajax';
		$this->autoRender = 'autorizar_ehs';
		$this->loadModel('User');
		if ($this->request->isPost()) {
        $myvar = $this->request->data['myvar']; 
		$this->Permission->save($this->data['firadm']);
    // whatever else needs doing...
    	
    }
        
		
	}


	// public function obtener_ehs(){
		

 //        $this->layout = 'ajax';
	// 	$this->autoRender = 'obtener_ehs';
	// 	$this->loadModel('User');
	// 	if ($this->request->isPost()) {
 //        $ehs = $this->request->data['ehs']; 
 //        $this->set('ehs', $this->User->find('list', array('conditions' => array('User.contractor_id' => $ehs, 'User.role' => 'ehs'))));
 //    }
        
		
	// }

	public function add_ajax(){
		

        $this->layout = 'ajax';
		$this->autoRender = 'add_ajax';
		$this->loadModel('User');
		if ($this->request->isPost()) {
        $super = $this->request->data['supervisor']; 
        $this->set('supervisor', $this->User->find('list', array('conditions' => array('User.contractor_id' => $super, 'User.role' => 'supervisor'))));
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
		if (!$this->Permission->exists($id)) {
			throw new NotFoundException('Permiso inválido :( intenta otra vez', 'alert-box', array('class' => 'alert alert-danger alert-dismissible'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Permission->save($this->request->data)) {
				$this->Session->setFlash('Permiso almacenado con éxito', 'alert-box', array('class' => 'alert alert-success alert-dismissible'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash('El permiso no fue almacenado :( intenta otra vez', 'alert-box', array('class' => 'alert alert-danger alert-dismissible'));
			}
		} else {
			$options = array('conditions' => array('Permission.' . $this->Permission->primaryKey => $id));
			$this->request->data = $this->Permission->find('first', $options);
		}
		$jobs = $this->Permission->Job->find('list');
		$contractors = $this->Permission->Contractor->find('list');
		$areas = $this->Permission->Area->find('list');
		$risks = $this->Permission->Risk->find('list');
		$rules = $this->Permission->Rule->find('list');
		$users = $this->Permission->User->find('list');
		$this->set(compact('jobs', 'contractors', 'areas', 'risks', 'rules', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Permission->id = $id;
		if (!$this->Permission->exists()) {
			throw new NotFoundException('Permiso inválido :( intenta otra vez', 'alert-box', array('class' => 'alert alert-danger alert-dismissible'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Permission->delete()) {
			$this->Session->setFlash('El permiso fue eliminado :(', 'alert-box', array('class' => 'alert alert-danger alert-dismissible'));
		} else {
			$this->Session->setFlash('El permiso no pudo ser eliminado', 'alert-box', array('class' => 'alert alert-danger alert-dismissible'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
