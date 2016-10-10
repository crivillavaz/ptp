<?php
App::uses('AppController', 'Controller');
/**
 * Stages Controller
 *
 * @property Stage $Stage
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class StagesController extends AppController {

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
	public function index() {
		$this->Stage->recursive = 0;
		$this->loadModel('User');
		$this->set('stages', $this->Stage->find('all'));
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Stage->recursive = 2;
		if (!$this->Stage->exists($id)) {
			throw new NotFoundException(__('Invalid stage'));
		}
		$options = array('conditions' => array('Stage.' . $this->Stage->primaryKey => $id));
		$this->set('stage', $this->Stage->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Stage->create();
			if ($this->Stage->save($this->request->data)) {

			} else {
				$this->Session->setFlash(__('The stage could not be saved. Please, try again.'));
			}
		}
		
		$contractors = $this->Stage->Contractor->find('list');
		$this->loadModel('Step');
		$this->loadModel('Risk');
		$risks = $this->Step->Risk->find('list');
		// $areas = $this->Stage->Area->find('list');
		$steps = $this->Stage->Step->find('list');
		$users = $this->Stage->User->find('list');
		$jobs = $this->Step->Job->find('list');
		$stages = $this->Step->Stage->find('list');
		$gears = $this->Step->Gear->find('list');
		$this->set(compact('contractors', 'cris', 'areas', 'steps', 'users', 'risks', 'jobs', 'stages', 'gears'));
	}

	public function anadir(){
		$this->layout = 'ajax';
		$this->autoRender = 'anadir';
		$this->loadModel('Step');
		$steps = $this->Stage->Step->find('list');
		if ($this->request->is('post')) {
			$this->Stage->create();
			if ($this->Stage->save($this->request->data)) {
				$this->set('cris', $this->Stage->getID());
			} else {
				$this->Session->setFlash(__('The stage could not be saved. Please, try again.'));
			}
		}

	}

	public function opciones(){
		$this->layout = 'ajax';
		$this->autoRender = 'opciones';
		$this->loadModel('Option');
		$this->loadModel('RisksOption');
		
		if ($this->request->isPost()) {
        $opciones = $this->request->data['riesgo'];
        $opt = $this->Option->find('list', array('conditions' => array('Option.risk_id' => $opciones)));
        $this->set('opcion', $opt );
    }

	}

	public function add_ajax(){
		$this->Stage->recursive = 2;
        $this->layout = 'ajax';
		$this->autoRender = 'add_ajax';
		$this->loadModel('User');
		if ($this->request->isPost()) {
        $content = $this->request->data['content']; 
        $this->set('supervisor', $this->User->find('list', array('conditions' => array('User.contractor_id' => $content, 'User.role' => 'supervisor'))));
    }
}
        
		public function obtener_trabajadores(){
		
		$this->Stage->recursive = 2;
        $this->layout = 'ajax';
		$this->autoRender = 'obtener_trabajadores';
		$this->loadModel('User');
		if ($this->request->isPost()) {
        $trabajadores = $this->request->data['trabajadores']; 
        $this->set('trabajadores', $this->User->find('list', array('conditions' => array('User.contractor_id' => $trabajadores, 'User.role' => 'trabajador'))));
    }
        
		
	}

		public function nivel_riesgo(){
		

        $this->layout = 'ajax';
		$this->autoRender = 'nivel_riesgo';
		if ($this->request->isPost()) {
        $valor = $this->request->data['valor'];
        $riesgopuro = $this->request->data['riesgopuro'];
        $this->set('riesgop', $riesgopuro);
        $this->set('valor', $valor);

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


	public function obtener_ehs(){
		

        $this->layout = 'ajax';
		$this->autoRender = 'obtener_ehs';
		$this->loadModel('User');
		if ($this->request->isPost()) {
        $ehs = $this->request->data['ehs']; 
        $this->set('ehs', $this->User->find('list', array('conditions' => array('User.contractor_id' => $ehs, 'User.role' => 'ehs'))));
    }
        
		
	}

	public function etapas(){
		

        $this->layout = 'ajax';
		$this->autoRender = 'etapas';
		$this->loadModel('Step');
		if ($this->request->isPost()) {
			$stage_id = $this->request->data['Step']['stage_id'];
			$this->set('stage_id', $stage_id);
      		$this->Step->create();
			if ($this->Step->save($this->request->data)) {

				
				} else {
				$this->Session->setFlash(__('The step could not be saved. Please, try again.'));
			}

			
    	}
    	$steps = $this->Step->find('all', array('conditions' => array('Step.stage_id' => $stage_id)));
    	$risks = $this->Step->Risk->find('list');
		$jobs = $this->Step->Job->find('list');
		$stages = $this->Step->Stage->find('list');
		$gears = $this->Step->Gear->find('list');
		$this->set(compact('risks', 'jobs', 'stages', 'gears', 'steps'));		
	}


/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Stage->exists($id)) {
			throw new NotFoundException(__('Invalid stage'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Stage->save($this->request->data)) {
				$this->Session->setFlash(__('The stage has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The stage could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Stage.' . $this->Stage->primaryKey => $id));
			$this->request->data = $this->Stage->find('first', $options);
		}
		$contractors = $this->Stage->Contractor->find('list');
		$areas = $this->Stage->Area->find('list');
		$steps = $this->Stage->Step->find('list');
		$this->set(compact('contractors', 'areas', 'steps'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Stage->id = $id;
		if (!$this->Stage->exists()) {
			throw new NotFoundException(__('Invalid stage'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Stage->delete()) {
			$this->Session->setFlash(__('The stage has been deleted.'));
		} else {
			$this->Session->setFlash(__('The stage could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
