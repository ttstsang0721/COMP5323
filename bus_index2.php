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
	//$url = 'http://static.data.gov.hk/td/routes-fares-xml/ROUTE_BUS.xml'; 
	//$xml = simpleXML_load_file($url,"SimpleXMLElement",LIBXML_NOCDATA);
	$xmlstr = get_xml_from_url('http://static.data.gov.hk/td/routes-fares-xml/ROUTE_BUS.xml');
	$xmlobj = new SimpleXMLElement($xmlstr);
	
	$xml=simplexml_load_string($xmlstr) or die("Error: Cannot create object");
	print_r($xml);
	
	$xml=simplexml_load_string($xmlobj) or die("Error: Cannot create object");
	print_r($xml);
	
	
	/*
	$search = some_escaping_func($user_input);
    	$uri = 'http://static.data.gov.hk/td/routes-fares-xml/ROUTE_BUS.xml'.$search;
    	$response = file_get_contents($uri);
    	$items_names = parse_xml($response);
    	// output the result
    	echo '<ul>';
    	foreach ($items_names as $name) {
        	echo '<li>'.htmlspecialchars($name).'</li>';
   	}
    	echo '</ul>';
	
	    function parse_xml($xml_str) {
		$items = array();
		$xml_doc = new SimpleXMLElement($xml_str);
		foreach ($xml_doc->item as $item) {
		    $items []= $item->name;
		}
		return $items;
    		}
	
	$objDOM = new DOMDocument();

	//Load xml file into DOMDocument variable
	$objDOM->load(" http://static.data.gov.hk/td/routes-fares-xml/ROUTE_BUS.xml");
	
	$x = $xmlDoc->documentElement;
	
	foreach ($x->childNodes AS $item) {
  		print $item->nodeName . " = " . $item->nodeValue . "<br>";
		
	}
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
	}*/


  ?>  
 
  </body>
</html>
