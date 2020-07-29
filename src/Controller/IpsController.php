<?php
declare(strict_types=1);

namespace App\Controller;

class IpsController extends AppController
{

    public function initialize(): void
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }
    

    public function index()
    {
        $ips = $this->Ips->find('all');
        $ips = $ips->toArray();
        $this->set('ips');
        //$this->viewBuilder()->setOption('serialize', 'ips');
    }

    
    public function view($id = null)
    {
        $ip = $this->Ips->get($id);
        $this->viewBuilder()->setOption('serialize', ['ip']);
    }

   
    public function add()
    {
        $this->request->allowMethod(['post', 'put']);
        $ip = $this->Ips->newEmptyEntity();
        $ip = $this->Ips->patchEntity($ip, $this->request->getData());
        
        if ($this->Ips->save($ip)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->viewBuilder()->setOption('serialize',['message']);
    }

    
    public function edit($id = null)
    {
        $ip = $this->Ips->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ip = $this->Ips->patchEntity($ip, $this->request->getData());
            if ($this->Ips->save($ip)) {
                $this->Flash->success(__('The ip has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The ip could not be saved. Please, try again.'));
        }
        $this->set(compact('ip'));
    }

   
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ip = $this->Ips->get($id);
        if ($this->Ips->delete($ip)) {
            $this->Flash->success(__('The ip has been deleted.'));
        } else {
            $this->Flash->error(__('The ip could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
