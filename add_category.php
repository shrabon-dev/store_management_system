<?php require_once 'include/add__header.php';  ?>
<?php require_once 'lib/dbcon.php';  ?>


<?php


if(isset($_GET['ceta__name']) && isset($_GET['ceta__ent__date'])){
    $name_of_category = $_GET['ceta__name'];
    $date_of_category =  $_GET['ceta__ent__date'];
 $sql = "INSERT INTO cate__table(category__name,category__entry__date) VALUES('$name_of_category','$date_of_category')";

  if($mysql_conect->query( $sql)==true){
       $data__output =  "Your data is reserved";
  }else{
    $data__output = "Sorry, we cannot found any data";

  }
}

?>



<div class="container mt-5">
    <div class="row">
    <h1>Add your product category :</h1>

        <div class="col-lg-4 mt-2">
<form method="get" action="add_category.php">
  <div class="mb-3">
    <label class="form-label txt-bold">Category Name: </label>
    <input type="text" class="form-control"   name="ceta__name">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label txt-bold">Entry Date :</label>
    <input type="date" class="form-control" id="exampleInputPassword1" name="ceta__ent__date">
  </div>

  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
</div>

    </div>
<div class="small__width mt-2">
<?php if(isset($_GET['submit'])):?>
    <div class="alert alert-success" role="alert">
      <h4 class="alert-heading"> <?php  echo $data__output;?> </h4>
    
    </div>
    <?php endif;?>
    </div>
</div>
<div class="show_data">
<a href="list_of_product.php"> Show Product &#8594;</a>
</div>

<?php require_once 'include/footer.php';  ?>