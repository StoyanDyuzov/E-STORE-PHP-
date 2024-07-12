<?php



class Products {
    
    private $name;
    private $description;
    private $price;
    private $imgpath;
    private $employee_id;

    public function __construct( $name, $description, $price, $imgpath, $employee_id)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
        $this->imgpath = $imgpath;
        $this->employee_id = $employee_id;
    }
    
    public function getName() {
        return $this->name;
    }

    public function setName($name) {
        $this->name = $name;
    }

    
    public function getDescription() {
        return $this->description;
    }

    public function setDescription($description) {
        $this->description = $description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setPrice($price) {
        $this->price = $price;
    }

    public function getImgpath() {
        return $this->imgpath;
    }

    public function setImgpath($imgpath) {
        $this->imgpath = $imgpath;
    }

    public function getEmployeeId() {
        return $this->employee_id;
    }

    public function setEmployeeId($employee_id) {
        $this->employee_id = $employee_id;
    }


    public function uploadProduct($dbc)
    {
        try{
            $name = $this->getName();
            $description = $this->getDescription();
            $price = $this->getPrice();
            $imgpath = $this->getImgpath();
            $employee_id=$this->getEmployeeId();

            $uploadProduct = $dbc->prepare("insert into products(name, description, price, imgpath, employee_id) values (:name,:description,:price,:target_file,:employee_id)");
            $uploadProduct->bindParam(":name",$name);
            $uploadProduct->bindParam(":description",$description);
            $uploadProduct->bindParam(":price",$price);
            $uploadProduct->bindParam(":target_file",$imgpath);
            $uploadProduct->bindParam(":employee_id",$employee_id);
            $uploadProduct->execute();

        }catch(PDOException $e){
            echo $e;
            exit();
        }
        
    }
}
?>
