<?php 
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Datasource\ConnectionManager;

class DataController extends Controller{
    public function display(){
        $value= 'display';
        $connection= ConnectionManager::get('default');

        $stmt = $connection->prepare('SELECT * from users where id > ?');
        $stmt->bind(
            [1],['integer']
        );
        $stmt->execute();
        $values='';// count($stmt);

        $rows =$stmt->fetchAll('assoc');

        foreach ($rows as $row) {
           $values .= $row['id'] .'--'.$row['email'].'<br>';
        }
       
        $this->set('values',$values);
    }
}

?>