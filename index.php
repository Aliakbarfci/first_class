<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My first php website</title>
</head>
<body>
  <?php ?>
  <h1>this is frist heading</h1>
  
  <?php 
    $roll= 10; 
    $city = 'Dhaka or Rajshahi';
    echo '<h3>two most beautiful city is '.$city.'</h3>';
    ?>
    
    
    
    <h1>My roll number is <?php echo $roll; ?></h1>
    <h2>two most beautiful city is <?php echo $city; ?></h2>
    
    
    <?php 
    $beautiful= 'Dhaka';
    $cities= array('Dhaka','Rajshahi','Khulna','Barishal');
   
    ?>
    <?php if($beautiful== 'Rajshahi'): ?>
    <h1>Most beautiful city is Rajshahi</h1>
    
    
    <?php endif; ?>
    
    <!--asbena blank dekhabe -->
    
  
  
   <?php 
     $wonderful ='Rajshahi';
    ?>
    
    
    
    
    <?php if($beautiful== 'Rajshahi'): ?>
    <h6>Most beautiful city is Rajshahi</h6>
    <?php endif; ?>
    <!--asbe-->
    
    
    <?php if($wonderful== 'Rajshahi'):?>
    <h4>beautiful city is Rajshahi</h4>
    <?php else : ?>
    <h4>We don't know</h4>
    <?php endif;?>



    <?php 
    if($wonderful == 'Rajshahi'){
                echo '<h1>most wonderful city is '.$wonderful.'</h1>';
        }

     else{
         echo '<h3>We don\'t know</h3>'; 
        }
        ?>
    
    
  <?php 
   echo '<h1>Third city is '.$cities[2].'</h1>';
    
    if($cities[3]== 'Dhaka'){}
    else{
        
      echo  
    }
    ?>
    
    

</body>
</html>