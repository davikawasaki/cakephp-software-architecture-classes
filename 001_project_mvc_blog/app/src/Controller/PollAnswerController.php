<?php
namespace App\Controller;

use App\Controller\AppController;
use App\Controller\PollController;

/**
 * PollAnswer Controller
 *
 * @property \App\Model\Table\PollAnswerTable $PollAnswer
 *
 * @method \App\Model\Entity\PollAnswer[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PollAnswerController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Poll']
        ];
        $pollAnswer = $this->paginate($this->PollAnswer);

        $this->set(compact('pollAnswer'));
    }

    /**
     * View method
     *
     * @param string|null $id Poll Answer id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $pollAnswer = $this->PollAnswer->get($id, [
            'contain' => ['Poll']
        ]);

        $this->set('pollAnswer', $pollAnswer);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $pollAnswer = $this->PollAnswer->newEntity();
        if ($this->request->is('post')) {
            $pollAnswer = $this->PollAnswer->patchEntity($pollAnswer, $this->request->getData());
            if ($this->PollAnswer->save($pollAnswer)) {
                $this->Flash->success(__('The poll answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poll answer could not be saved. Please, try again.'));
        }
        $poll = $this->PollAnswer->Poll->find('list', ['limit' => 200]);
        $pollList = Poll->find('list');
        $this->set(compact('pollAnswer', 'poll'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Poll Answer id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $pollAnswer = $this->PollAnswer->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $pollAnswer = $this->PollAnswer->patchEntity($pollAnswer, $this->request->getData());
            if ($this->PollAnswer->save($pollAnswer)) {
                $this->Flash->success(__('The poll answer has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The poll answer could not be saved. Please, try again.'));
        }
        $poll = $this->PollAnswer->Poll->find('list', ['limit' => 200]);
        $this->set(compact('pollAnswer', 'poll'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Poll Answer id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $pollAnswer = $this->PollAnswer->get($id);
        if ($this->PollAnswer->delete($pollAnswer)) {
            $this->Flash->success(__('The poll answer has been deleted.'));
        } else {
            $this->Flash->error(__('The poll answer could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
