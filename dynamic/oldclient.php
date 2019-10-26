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

  $(function () 
  { //alert("hello");
    //-----------------------------------------------------------------------
    // 2) Send a http request with AJAX http://api.jquery.com/jQuery.ajax/
    //-----------------------------------------------------------------------
    $.ajax({                                      
      url: 'api.php',                  //the script to call to get data          
      data: "",                        //you can insert url argumnets here to pass to api.php
                                       //for example "id=5&parent=6"
      dataType: 'json',                //data format      
      success: function(data)          //on recieve of reply
      {
        var no = data[0];              //get no
        var uid = data[1];           //get uid
        var status = data[2];              //get no
        var safety = data[3];           //get uid
        var security = data[4];           //get uid
        var IP = data[5];              //get no
        var when = data[6];           //get uid
        //--------------------------------------------------------------------
        // 3) Update html content
        //--------------------------------------------------------------------
        $('#output').html("<b>No: </b>"+no+"<b> User ID: </b>"+uid+"<b>Status: </b>"+status+"<b> Safety: </b>"+safety+"<b>Security: </b>"+security+"<b> IP Address: </b>"+IP+"<b> When: </b>"+when); //Set output element html
        //recommend reading up on jquery selectors they are awesome 
        // http://api.jquery.com/category/selectors/
      } 
    });
  }); 

  </script>
  </body>
</html>