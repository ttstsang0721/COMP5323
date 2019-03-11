<!DOCTYPE html>
<html>
<style>
table,th,td {
  border : 1px solid black;
  border-collapse: collapse;
}  
th,td {
  padding: 5px;
}
</style>
  
<body>
<?php
echo "My first PHP script!";
?>
	
  <?php
	$objDOM = new DOMDocument();

	//Load xml file into DOMDocument variable
	$objDOM->load(" http://static.data.gov.hk/td/routes-fares-xml/ROUTE_BUS.xml");
	
	$x = $xmlDoc->documentElement;
	
	foreach ($x->childNodes AS $item) {
  		print $item->nodeName . " = " . $item->nodeValue . "<br>";
		
	}
	<?--
	//Find Tag element "config" and return the element to variable $node
	$node = $objDOM->getElementsByTagName("ROUTE");

	//looping if tag config have more than one
	foreach ($node as $searchNode) {
	    $dbCompany = $searchNode->getElementByTagName('COMPANY_CODE');
		echo $dbCompany;
		echo "<br/>";
	    $dbRN = $searchNode->getElementByTagName('ROUTE_NAMEE');
		echo $dbRN;
		echo "<br/>";
	    $dbStartNameC = $searchNode->getElementByTagName('LOC_START_NAMEC');
		echo $dbStartNameC;
		echo "<br/>";
	    $dbStartNameS = $searchNode->getElementByTagName('LOC_START_NAMES');
		echo $dbStartNameS;
		echo "<br/>";
	    $dbStartNameE = $searchNode->getElementByTagName('LOC_START_NAMEE');
		echo $dbStartNameE;
		echo "<br/>";
	    $dbHLE = $searchNode->getElementByTagName('HYPERLINK_E');
		echo $dbHLE;
		echo "<br/>";
	    $dbFF = $searchNode->getElementByTagName('FULL_FARE');
		echo $dbFF;
		echo "<br/>";
	}-->


  ?>  
 
  </body>
</html>
