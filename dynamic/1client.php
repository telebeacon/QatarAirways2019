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
        printText = printText +"<br>" + "<img src=\"imageViewadd.php?image_id=" + imageId + "\" />" +"<br>" + "<img src=\"imageViewadd1.php?image_id=" + imageId + "\" />" +"<BR>" + "<b>Name: </b>"+name+"<b> Flight: </b>"+flight+"</b> sex: </b>"+sex+"</b> PNR: </b>" +pnr+"</b> Image Id : </b>" + imageId +"</b>" ;//output element html
        //recommend reading up on jquery selectors they are awesome 
        // http://api.jquery.com/category/selectors/


}
$('#output').html(printText)
      } 
    });
  }}); 
 
  </script>

<?php  echo "Hello World $imageIdTest "; ?>

  </body>
</html>