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
        if($this->getRequest()->isPost())
        {
          $product = new Produto();
          $product->setNome($this->getRequest()->getPost('nome'));
          $product->setEstoque($this->getRequest()->getPost('estoque'));
          $product->setPreco($this->getRequest()->getPost('preco'));
          
          $this->getObjectManager()->persist($product);
          if($this->getObjectManager()->flush())
            $this->view->resp = "Produto " . $nome . " enviado com sucesso!";
          else
            $this->view->resp = "Produto " . $nome . " não gravado!";
        }
        return new ViewModel();
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

