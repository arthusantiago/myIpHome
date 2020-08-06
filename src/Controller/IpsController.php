<?php
declare(strict_types=1);

namespace App\Controller;

class IpsController extends AppController
{   

    public function index()
    {
        $this->request->allowMethod(['get']);
        $query = $this->Ips->find('all');
        $dados = $query->toArray();
        $this->set(compact('dados'));
    }
    

    public function view($id = null)
    {
        $this->request->allowMethod(['get']);
        $ip = $this->Ips->get($id);
        $this->set(compact('ip'));
    }


    public function add()
    {
        $this->request->allowMethod(['post']);
        $ip = $this->Ips->newEmptyEntity();
        $ip->ip = $_SERVER['REMOTE_ADDR'];
        $salvo = $this->Ips->save($ip);
        if ($salvo) {
            $mensagem = 'Salvo com sucesso.';
            $this->set(['IpSalvo' => $salvo, 'mensagem' => $mensagem]);
        } else {
            $mensagem = 'Erro ao editar';
            $this->set(['mensagem' => $mensagem]);
        }
    }

    
    public function edit($id=null)
    {
        $this->request->allowMethod(['put']);
        $ip = $this->Ips->get($id);
        $ip = $this->Ips->patchEntity($ip, $this->request->getData());
        $salvo = $this->Ips->save($ip);
        if ($salvo) {
            $mensagem = 'Editado com sucesso.';
            $this->set(['IpEditado' => $salvo, 'mensagem' => $mensagem]);
        } else {
            $mensagem = 'Erro ao editar';
            $this->set(['mensagem' => $mensagem]);
        }
    }

   
    public function delete($id = null)
    {
        $this->request->allowMethod(['delete']);
        $ip = $this->Ips->get($id);
        $mensagem = 'Deletado com sucesso.';
        if (!$this->Ips->delete($ip)) {
            $mensagem = 'Erro ao deletar.';
        }
        $this->set(compact('mensagem'));
    }
}
