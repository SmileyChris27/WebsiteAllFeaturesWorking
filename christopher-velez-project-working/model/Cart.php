<?php
//Relevant item we are seeking data_seek//
//MYSQLI_NUM = Array items will use a numerical index key. MYSQLI_ASSOC = Array items will use the column name as an index key. An index is a performance optimisation feature that enables data to be accessed faster.//
//Fetch_array — Fetch a result row as an associative array, a numeric array, or both//
//Query is a request for data or information from a database table or combination of tables.//
//An index contains keys built from one or more columns in the table or view. These keys are stored in a structure (B-tree) that enables SQL Server to find the row or rows associated with the key values quickly and efficiently.//


class Cart{
	//Making the Database//
	function __construct(){
		$servername='localhost';
		$dbusername='root';
		$dbpassword='';
		$dbname='chris_database';
		####################################################
		$this->conn=new mysqli($servername,$dbusername,$dbpassword,$dbname);
		if ($this->conn->connect_error) die($conn->connect_error);
	}
	
	//Adding The Item to cart for the user//
	function addItem($userid,$item,$price){
		$query="SELECT * from cart where userid='$userid' and item='$item'";
		$result = $this->conn->query($query);
		$rows=$result->num_rows;
		if($rows==0){  
			$query="insert into cart values('$userid','$item',1,$price)";
			$result = $this->conn->query($query);
			return true;
		}
		
		$i=0;
		$result->data_seek($i);
		$row=$result->fetch_array(MYSQLI_ASSOC);
		$qty=(int)$row['quantity']+1;
		$query="update cart set quantity=$qty where userid='$userid' and item='$item'";
		$result = $this->conn->query($query);
		return true;	 	
	}
	
	//Sets the amount of items there are for the user//
	function setItemNum($userid,$item,$price,$qty){
		$qty=(int)$qty;
		$query="SELECT * from cart where userid='$userid' and item='$item'";
		$result = $this->conn->query($query);
		$rows=$result->num_rows;
		
		if($rows==0 ){
			return true;
		}
		

		$i=0;
		$result->data_seek($i);
		$row=$result->fetch_array(MYSQLI_ASSOC);
		if($qty>0) $query="update cart set quantity=$qty where userid='$userid' and item='$item'";
		else $query="delete from cart where userid='$userid' and item='$item'";
		$result = $this->conn->query($query);
		return true;	 
	}

	//The Quanitity of how many items in the cart//
	function getItemQuantity($userid,$item){
		$query="SELECT quantity from cart where userid='$userid' and item='$item'";
		$result = $this->conn->query($query);
		$result->data_seek(0);
		$row=$result->fetch_array(MYSQLI_ASSOC);
		return (int)$row['quantity'];
	}

	//Creates the GUI cart//
	function getCart($userid){
		$query="SELECT * from cart where userid='$userid' ";
		$result = $this->conn->query($query);
		$row=$result->fetch_array(MYSQLI_ASSOC);
		$rows=$result->num_rows;
		$str='<table><tr><th>ITEM</th><th>QTY</th><th>PRICE</th><th>TOTAL</th></tr>';
		$this->total = 0;
		for($i=0;$i<$rows;++$i){
			$result->data_seek($i);
			$row=$result->fetch_array(MYSQLI_ASSOC);
			$item=$row['item'];
			$price=$row['price'];
			$qty=$row['quantity'];
			$str.="<tr><td>$item</td><td><form method='get' action='index.php'>".
					"<input type='text' size='1' name='qty' value='$qty' />".
					"<input type='hidden' name='choice' value='cart' />".
					"<input type='hidden' name='choice2' value='set' />".
					"<input type='hidden' name='item' value='$item'/>".
					"<input type='hidden' name='userid' value='$userid'/>".
					"<input type='hidden' name='price' value='$price' />".
					"<input type='submit' value='ENTER'/></form>".
				    "</td><td>".$price."</td><td>".(float)$price* (int)$qty."</td></tr>";
				    $this->total = $this->total + (float)$price * (int)$qty;
		}

		$str = $str . "<tr> <td colspan='3'>GRAND TOTAL:</td> <td>" . $this->getTotal() . "</td> </tr>";


		$str.="</table>";
		return $str;
	}
	
	function getTotal(){
		return $this->total;
	}


	function getItemPrice($userid,$item)
	{
		$query="SELECT price from cart where userid='$userid' and item='$item'";
		$result = $this->conn->query($query);
		$result->data_seek(0);
		$row=$result->fetch_array(MYSQLI_ASSOC);
		return (float)$row['price'];
	}
	function emptyCart($userid)
	{
		$query="delete from cart where userid='$userid'";
		$result = $this->conn->query($query);
	}
	
	function getItemCost($userid,$item)
	{
		return $this->getItemQuantity($userid,$item)*$this->getItemPrice($userid,$item);
	}
	
	function __destruct()
	{
		$this->conn->close();
	}
}
?>
