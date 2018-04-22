<?php
namespace Application\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * This class represents a single product.
 * @ORM\Entity
 * @ORM\Table(name="produto")
 */
class Produto
{ 

  /**
   * @ORM\Id
   * @ORM\GeneratedValue
   * @ORM\Column(name="id")   
   */
  protected $id;

  /** 
   * @ORM\Column(name="nome")  
   */
  protected $nome;

  /** 
   * @ORM\Column(name="estoque")  
   */
  protected $estoque;

  /** 
   * @ORM\Column(name="preco")  
   */
  protected $preco;

  // Returns ID of this post.
  public function getId() 
  {
    return $this->id;
  }

  // Sets ID of this product.
  public function setId($id) 
  {
    $this->id = $id;
  }

  // Returns nome.
  public function getNome() 
  {
    return $this->nome;
  }

  // Sets nome.
  public function setNome($nome) 
  {
    $this->nome = $nome;
  }

  // Returns estoque.
  public function getEstoque() 
  {
    return $this->estoque;
  }

  // Sets estoque.
  public function setEstoque($estoque) 
  {
    $this->estoque = $estoque;
  }
    
  // Returns preco.
  public function getPreco() 
  {
    return $this->preco; 
  }
    
  // Sets preco.
  public function setPreco($preco) 
  {
    $this->preco = $preco;
  }

//   public function save($product)
//   {
//     $entityManager = $container->get('doctrine.entitymanager.orm_default');
//     $entityManager->persist($product);
//     $entityManager->flush();
//   }

//   public function list()
//   {
//     // $select = $this->select()->order("nome asc");
//     // return $this->fetchAll($select)->toArray();
//     $entityManager = $container->get('doctrine.entitymanager.orm_default');
//     $entityManager->getRepository(Produto::class)->findBy(
//         ['nome'=>'ASC']
//     );
//   }
}