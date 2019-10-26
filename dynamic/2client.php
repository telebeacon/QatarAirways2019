<!---------------------------------------------------------------------------
Example client script for JQUERY:AJAX -> PHP:MYSQL example
---------------------------------------------------------------------------->

<html>
  <head>
    <script language="javascript" type="text/javascript" src="jquery-1.11.0.min.js"></script>
  </head>
  <body>

  <!-------------------------------------------------------------------------
  1) Create some html content that can be accessed by jquery
  -------------------------------------------------------------------------->
  <h2> Online Warning System </h2>
  <h3>Here is the present status of your Online Warning Keypad System: </h3>
  <div id="output">Your present status of the System</div>

  <script id="source" language="javascript" type="text/javascript">

 var seconds = 2;    
    var isPulse=true;
var printText ;
var imageIdTest; 
  $(function  heartbeat() 
    { 

  if(isPulse){
            var hb = setTimeout(heartbeat, seconds*1000); 
//alert("hello");
    //-----------------------------------------------------------------------
    // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
    //-----------------------------------------------------------------------
    $.ajax({                                      
      url: '1api.php',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
printText="";
for($i =0 ;$i< data.length; $i++)
{
        var name = data[$i]["name"];              //get no
        var flight = data[$i]["flight"];           //get uid
        var sex = data[$i]["sex"];              //get no
	var pnr = data[$i]["pnr"];              //get no

 	var imageId =data[$i]["imageId"]; 

imageIdTest=imageId ;
//	
        //--------------------------------------------------------------------
        // 3) Update html content
        //--------------------------------------------------------------------
;
  var abc= "<div class='googft-card-view' style=\"width: 530px; padding: 4px; margin: 4px; border: 1.5px solid #ccc; overflow: hidden\">";
  var edf = "<img src=\"imageViewadd.php?image_id=" + imageId + "\" title=\"{Name}\" alt=\"{Name}\" style=\"float: left; height: 150px; width: 119px; padding: 8px;\"> <img src=\"imageViewadd1.php?image_id=" + imageId + "\" title=\"{Name}\" alt=\"{Name}\" style=\"float: left; height: 150px; width: 119px; padding: 8px;\"> ";

   var ghi ="<div style=\"font-weight: bold; font-size: 125%; padding-top: 8px\">  <a style=\"color: #000000; text-decoration: none;\" target=\"_blank\" href=\"{Website}\">" + name + "</a> </div>";
   var jkl = "<div>{Flight} - " + flight + "</div>";
//   <div style="padding-bottom: 12px">  <span style="color: #76797c; font-size: 95%;">Class:</span> {Class}   </div>
  var mno ="<div>{Office}" + "<br/>{Phone Number}</div>";
  var pqr = "<div style=\"font-size: 110%; font-weight: bold; padding-top: 24px\">    <a href=\"{Contact}\" target=\"_blank\">Contact {Name}</a> </div> </div> ";

  printText =  printText  + abc + edf + ghi + jkl + mno + pqr;


        //printText = printText +"<br>" + "<img src=\"imageViewadd.php?image_id=" + imageId + "\">" +"<br>" + "<img src=\"imageViewadd1.php?image_id=" + imageId + "\" />" +"<BR>" + "<b>Name: </b>"+name+"<b> Flight: </b>"+flight+"</b> sex: </b>"+sex+"</b> PNR: </b>" +pnr+"</b> Image Id : </b>" + imageId +"</b>"  ;//output element html
   



}



$('#output').html(printText)
      } 
    });
  }}); 
 
  </script>

<?php  echo "Passenger & Luggage Information "; ?>

  </body>
</html>