<?php
App::uses('AppController', 'Controller');
/**
 * Rentbooks Controller
 *
 * @property Rentbook $Rentbook
 */
class RentbooksController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Rentbook->recursive = 0;
		$this->set('rentbooks', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Rentbook->id = $id;
		if (!$this->Rentbook->exists()) {
			throw new NotFoundException(__('Invalid rentbook'));
		}
		$this->set('rentbook', $this->Rentbook->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Rentbook->create();
			if ($this->Rentbook->save($this->request->data)) {
				$this->Session->setFlash(__('The rentbook has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rentbook could not be saved. Please, try again.'));
			}
		}
		$users = $this->Rentbook->User->find('list');
		$books = $this->Rentbook->Book->find('list');
		$this->set(compact('users', 'books'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Rentbook->id = $id;
		if (!$this->Rentbook->exists()) {
			throw new NotFoundException(__('Invalid rentbook'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Rentbook->save($this->request->data)) {
				$this->Session->setFlash(__('The rentbook has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The rentbook could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Rentbook->read(null, $id);
		}
		$users = $this->Rentbook->User->find('list');
		$books = $this->Rentbook->Book->find('list');
		$this->set(compact('users', 'books'));
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Rentbook->id = $id;
		if (!$this->Rentbook->exists()) {
			throw new NotFoundException(__('Invalid rentbook'));
		}
		if ($this->Rentbook->delete()) {
			$this->Session->setFlash(__('Rentbook deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Rentbook was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
