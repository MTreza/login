'<?php 
require_once "db.php";
class users {
    public $list = "list";
 private $id;

 private $firstname;
 private $lastname;
 private $phone;
public function setuser ($list){
    $this->list= $list;
}
public function setid ($id){
    $this->id = $id;
}
public function setfirstname($firstname){
    $this->firstname = $firstname;
}
public function setlastname ($lastname){
    $this->lastname = $lastname;
}
public function setphone ($phone){
    $this->phone = $phone ;
}

public function setinsertdata(){
    $sql = "INSERT INTO users (`firstname`, `lastname`, `phone`)VALUES (:firstname, :lastname, :phone)";
     $stmt= DB::prepareOwn($sql);
     $stmt->bindParam(":firstname", $this->firstname);
    $stmt->bindParam(":lastname", $this->lastname);
     $stmt->bindParam(":phone", $this->phone);
   
     return $stmt->execute();
}
public function redall() {
    $sql = "SELECT * FROM users";
    $stmt = DB::prepareOwn($sql);
    $stmt->execute();
    return $stmt->fetchAll();
}

public function deletedata($id)
{
    $sql = "DELETE FROM users WHERE id=:id";
    $stmt = DB::prepareOwn($sql);

    $stmt->bindParam(":id", $id);
    return $stmt->execute();
}

public function getOne($id)
{
    $sql = "SELECT * FROM users WHERE id=:id";
    $stmt = DB::prepareOwn($sql);

    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch();
}

public function Updatedata($id)
{
    $sql = "UPDATE users SET firstname=:firstname, lastname=:lastname, phone=:phone WHERE id=:id";
    $stmt = DB::prepareOwn($sql);

    $stmt->bindParam(":firstname", $this->firstname);
    $stmt->bindParam(":lastname", $this->lastname);
    $stmt->bindParam(":phone", $this->phone);
    $stmt->bindParam(":id", $id);

    return $stmt->execute();
}
}







?>
<?php 

// require_once "db.php";
// class users {
//     public $list = "list";
//  private $id;

//  private $firstname;
//  private $lastname;
//  private $phone;
// public function setuser ($list){
//     $this->list= $list;
// }
// public function setid ($id){
//     $this->id = $id;
// }
// public function setfirstname($firstname){
//     $this->firstname = $firstname;
// }
// public function setlastname ($lastname){
//     $this->lastname = $lastname;
// }
// public function setphone ($phone){
//     $this->phone = $phone ;
// }

// public function setinsertdata(){
//     $sql = "INSERT INTO users (`firstname`, `lastname`, `phone`)VALUES (:firstname, :lastname, :phone)";
//      $stmt= DB::prepareOwn($sql);
//      $stmt->bindParam(":firstname", $this->firstname);
//     $stmt->bindParam(":lastname", $this->lastname);
//      $stmt->bindParam(":phone", $this->phone);
   
//      return $stmt->execute();
// }
// public function redall() {
//     $sql = "SELECT * FROM users";
//     $stmt = DB::prepareOwn($sql);
//     $stmt->execute();
//     return $stmt->fetchAll();
// }

// public function deletedata($id)
// {
//     $sql = "DELETE FROM users WHERE id=:id";
//     $stmt = DB::prepareOwn($sql);

//     $stmt->bindParam(":id", $id);
//     return $stmt->execute();
// }

// public function getOne($id)
// {
//     $sql = "SELECT * FROM users WHERE id=:id";
//     $stmt = DB::prepareOwn($sql);

//     $stmt->bindParam(":id", $id);
//     $stmt->execute();
//     return $stmt->fetch();
// }

// public function Updatedata($id)
// {
//     $sql = "UPDATE users SET firstname=:firstname, lastname=:lastname, phone=:phone WHERE id=:id";
//     $stmt = DB::prepareOwn($sql);

//     $stmt->bindParam(":firstname", $this->firstname);
//     $stmt->bindParam(":lastname", $this->lastname);
//     $stmt->bindParam(":phone", $this->phone);
//     $stmt->bindParam(":id", $id);

//     return $stmt->execute();
// }
// }



//  



?>