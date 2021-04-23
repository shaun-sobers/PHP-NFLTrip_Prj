<?php
require_once('PHP/Customer.php');
require_once('PHP/Customers.php');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        
        
        
        
        $customers = new Customers();
        $customers = new customers();
        
        echo "There are " .$customers->count() . " customers in the collection";
        echo "<ol>";
        foreach($customers->items as $customer)
        {
        echo "<li>".$customer->getFirstName()." , ".$customer->getLastName()."</li>";
        
        }
  echo "</ol>";      
        
  
  
  echo "<form action='index.php' method='post'>";
          echo "<select name='customer_id'>";
        foreach($customers->items as $customer)
        {
        echo "<option value='".$customer->getCustomerID()."'>".$customer->getFirstName()." , ".$customer->getLastName()."</option>";
        
        }
        
  echo "</select>"; 
  echo "<input name='load' type='submit' value='Load' >";
  echo "</form>";
  
  if(isset($_POST['load'])){
      $customer= new customer();
      
  if ($customer->load($_POST['customer_id']))
  {
      echo "The customer that was selected is a " .$customer->getFirstName(). " " . $customer->getLastName()()."";
  }
  }
  
  $customers = new customers();
  echo "<table style='border:1px solid black'>";
  ?>
    <tr>
        <th>Brand</th>
        <th>Year</th>
        <th>Transmission</th>
    </tr>
    
    <?php
    foreach($customers->items as $customer)
    {
        echo "<tr>";
        echo "<td>" .$customer->getFirstName(). "</td>";
        echo "<td>" .$customer->getLastName(). "</td>";
        echo "<td>" .$customer->getCustomerID(). "</td>";
        
        echo "</tr>";
    }
    
    echo "</table>";
    
    ?>
     <form action="index.php" method="post">
            Show customers for that year or later: <input name="year">
            <input type="submit" name="search" value="Search by year">
        </form>
       
        <?php
       
        if(isset($_POST["update"]))
        {
            $customer = new customer();
           
            if($customer->load($_POST["customer_id"]))
            {
                $customer->setYear($_POST["newYear"]);
               
                $customer->save();
            }
        }
       
        if(isset($_POST["search"]))
        {
            $customers = new customers($_POST["year"]);
       
            echo "<table style='border:1px solid black '>";
       
        ?>
            <tr>
                <th>Brand</th>
                <th>Year</th>
                <th>Update</th>
            </tr>
       
        <?php
        foreach($customers->items as $customer)
        {
            echo "<tr>";
           
            echo "<td>" . $customer->getFirstName() . "</td>";
            echo "<td>" . $customer->getLastName()() . "</td>";
           
            echo "<td><form action='index.php' method='post'>"
            . '<br><input type="text name="newYear">'
            . '<br><input type="submit" name="update" value="Modify the year">'
            . '<br><input type="hidden" name="customer_id value="' . $customer->getCarId() . '">'
            . "</form></td>";
           
            echo "</tr>";
        }
       
        echo "</table>";
        }
        
        
        ?>
    </body>
</html>