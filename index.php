  <?php
//
  $stmt1 = $conn->prepare("SELECT product_name FROM products WHERE  product_id = ? ");
  $stmt1->bind_param('i',$product_id);
  $stmt1->execute();
  $stmt1->store_result();
  $stmt1->bind_result($product_name);
  $stmt1->fetch();

//then

echo $product_name;

//METHOD WITH GET_RESULT(); 

  $stmt1 = $conn->prepare("SELECT product_name FROM products WHERE  product_id = ? ");
  $stmt1->bind_param('i',$product_id);
  $stmt1->execute();
  $title = $stmt1->get_result()->fetch_assoc();

//then 

echo $title['product_name'];

?>
