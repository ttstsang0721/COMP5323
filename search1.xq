xquery version "3.1";
declare option exist:serialize "method=xhtml media-type=text/html indent=yes";

let $title := 'Bus route Search Result Page'
let $data := doc('ROUTE_BUS.xml')

(: get the search query string from the URL parameter :)
let $routeno := request:get-parameter('routeno', '')
let $station := request:get-parameter('station', '')
let $company := request:get-parameter('company', '')

(:  :let $routeno-predicate := if ($routeno) then concat('[routeno', " = '", $routeno, "']") else ()
let $station-predicate := if ($station) then concat('[station', " = '", $station, "']") else ()
let $company-predicate := if ($company) then concat('[company', " = '", $company, "']") else ()

let $eval-string := concat("doc('ROUTE_BUS.xml')//ROUTE",$routeno-predicate,$station-predicate,$company-predicate)

let $routes := util:eval($eval-string) :)

return
<html>
    <head>
       <title>{$title}</title>
     </head>
     <body>
        <h1>Search Results</h1>
        <p><b>Searching for: </b> Bus no: {$routeno} ; Operated by {$company} in ROUTE_BUS.xml</p>
        <p> </p>
        <p> </p>      
        <table border="1">
        <tbody>
        <tr> 
            <th>Route Number</th>
            <th>Company Code</th>
            <th>Start Station</th>
            <th>End Station</th>
            <th>Full Fare</th>
        </tr>
        {
        for $route in $data//ROUTE[ROUTE_NAMEE/text() = $routeno][COMPANY_CODE/text() = $company]
             return <tr> 
                <td>{data($route//ROUTE_NAMEE)}</td>
                <td>{data($route//COMPANY_CODE)}</td>
                <td>{data($route//LOC_START_NAMEE)}</td>
                <td>{data($route//LOC_END_NAMEE)}</td>
                <td>{data($route//FULL_FARE)}</td> </tr> } 

        </tbody></table>
   </body>
</html>


(:{
            for $route in $data//ROUTE[LOC_START_NAMEE/text() = $station]
             return <tr> 
                <td>{data($route//ROUTE_NAMEE)}</td>
                <td>{data($route//COMPANY_CODE)}</td>
                <td>{data($route//LOC_START_NAMEE)}</td>
                <td>{data($route//LOC_END_NAMEE)}</td>
                <td>{data($route//FULL_FARE)}</td> </tr> }            
        {
           for $route in $data//ROUTE[LOC_START_NAMEE/text() = $station]
             return <tr>
                <td>{data($route//ROUTE_NAMEE)}</td>
                <td>{data($route//COMPANY_CODE)}</td>
                <td>{data($route//LOC_START_NAMEE)}</td>
                <td>{data($route//LOC_END_NAMEE)}</td>
                <td>{data($route//FULL_FARE)}</td> </tr> }:)