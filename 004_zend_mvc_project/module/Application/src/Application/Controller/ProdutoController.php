<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\Produto;

class ProdutoController extends AbstractActionController
{

    protected $_objectManager;

    protected function getObjectManager()
    {
        if (!$this->_objectManager) {
            $this->_objectManager = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->_objectManager;
    }

    public function indexAction()
    {
        $msg = null;
        if($this->getRequest()->isPost())
        {
          $product = new Produto();
          $product->setNome($this->getRequest()->getPost('nome'));
          $product->setEstoque($this->getRequest()->getPost('estoque'));
          $product->setPreco($this->getRequest()->getPost('preco'));
          
          try {
            $this->getObjectManager()->persist($product);
            $this->getObjectManager()->flush();
            $msg = "Produto enviado com sucesso!";
          } catch(\Exception $e) {
            // var_dump($e->getMessage());
            $msg = "Produto não gravado!";
          }
        }
        return new ViewModel(array(
            'msg' => $msg
        ));
    }

    public function editAction()
    {
        $msg = null;
        
        $product_id = $this->params()->fromRoute('id');
        $product = null;

        if($this->getRequest()->isGet())
        {
          try {
            $product = $this->getObjectManager()->getRepository('\Application\Entity\Produto')->find($product_id);
          } catch(\Exception $e) {
            // var_dump($e->getMessage());
            $msg = "Produto " . $nome . " não existente!";
          }
        }

        if($this->getRequest()->isPost())
        {
            try {
              $product = $this->getObjectManager()->getRepository('\Application\Entity\Produto')->find($product_id);
              $product->setNome($this->getRequest()->getPost('nome'));
              $product->setEstoque($this->getRequest()->getPost('estoque'));
              $product->setPreco($this->getRequest()->getPost('preco'));
              try {
                $this->getObjectManager()->persist($product);
                $this->getObjectManager()->flush();
                $msg = "Produto atualizado com sucesso!";
              } catch(\Exception $e) {
                // var_dump($e->getMessage());
                $msg = "Produto não atualizado!";
              }
          } catch(\Exception $e) {
            // var_dump($e->getMessage());
            $msg = "Produto não existente!";
          }

        }
        return new ViewModel(array(
            'msg' => $msg,
            'product' => $product
        ));
    }

    public function removeAction()
    {
        $msg = null;
        if($this->getRequest()->isGet())
        {
          $product_id = $this->params()->fromRoute('id');
          
          try {
            $product = $this->getObjectManager()->getRepository('\Application\Entity\Produto')->find($product_id);
            $this->getObjectManager()->remove($product);
            $this->getObjectManager()->flush();
            $msg = "Produto removido com sucesso!";
          } catch(\Exception $e) {
            // var_dump($e->getMessage());
            $msg = "Produto não removido!";
          }
        }
        return new ViewModel(array(
            'msg' => $msg
        ));
    }

    public function buscarAction()
    {
        // Get recent products
        $products = $this->getObjectManager()->getRepository('\Application\Entity\Produto')->findBy(array(), array('nome'=>'ASC'));
        // echo var_dump($products);

        // Render the view template
        return new ViewModel(array(
            'listaProdutos' => $products
        ));
    }


}

