<?php
namespace App\Models;

use Framework\Core\AbsModel;
use PDO;

class Product extends AbsModel
{
	
	/**
   * @var string
   */
  protected $tablename = 'products';

  public function __construct()
  {
	 $this->getDB();
  }

   /**
     * Возвращает массив категорий для списка на сайте
     * @return array <p>Массив с категориями</p>
     */
    public function getProductsList()
    {
            
       $sql = "SELECT * FROM {$this->tablename} WHERE quantity > '0' ORDER BY id";
		 $sth = $this->db->prepare($sql);
		 $sth->execute();
		 $product = $sth->fetchAll(PDO::FETCH_ASSOC);
		 return !empty( $product) ?  $product : false;
		  
	 }
	 
	 public function getProductById(int $id)
    {
          
		$sql = "SELECT * FROM {$this->tablename} WHERE id=:id";
		$sth = $this->db->prepare($sql);
		$sth->execute([':id' => $id]);
		  $product = $sth->fetch(PDO::FETCH_ASSOC);
		  return !empty( $product) ?  $product : false;
    }
  
	  /**
     * Возвращает список товаров в указанной категории
     * @param type $categoryId <p>id категории</p>
     * @param type $page [optional] <p>Номер страницы</p>
     * @return type <p>Массив с товарами</p>
     */
    public  function getProductsListByCategory($category_id)
    {
        $sql = "SELECT * FROM {$this->tablename} 
        WHERE quantity > '0' AND category_id = :category_id";
		  $sth = $this->db->prepare($sql);
		  $sth->execute([':category_id' => $category_id]);
		  $product = $sth->fetchAll(PDO::FETCH_ASSOC);

		  return !empty( $product) ?  $product : false;
	
	}
}