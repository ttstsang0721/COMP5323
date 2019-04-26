xquery version "1.0";
declare option exist:serialize "method=xhtml media-type=text/html";

let $my-doc := doc('ROUTE_BUS.xml')
return
<html>
    <head>
        <title>BUS ROUTE DISPLAY</title>
    </head>
    <body>
    <table border="1">
    <thead>
      <tr>
          <th>Bus Route Number</th> 
		  <th>Bus Company</th>
          <th>Starting Station</th>
          <th>Ending Station</th>
          <th>Full Fare</th>		  
      </tr>
    </thead>
    <tbody>{
       for $route at $count in $my-doc//ROUTE
            let $route-id := $route/ROUTE_ID/text()
            order by ($route-id)
       return
         <tr> {if ($count mod 2) then (attribute bgcolor {'Lavender'}) else ()}
           <td>{$route/ROUTE_NAMEE/text()}</td>
           <td>{$route/COMPANY_CODE/text()}</td>		   
           <td>{$route/LOC_START_NAMEE/text()}</td>
           <td>{$route/LOC_END_NAMEE/text()}</td>	
           <td>{$route/FULL_FARE/text()}</td>		   
         </tr>
       }</tbody>
     </table>
   </body>
</html>