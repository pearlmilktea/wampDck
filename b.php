<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Ajax - Load</title>
  </head>
  
  <body>
    <button id="action">Afficher</button><br />
    <div id="r">Begining</div>

    <script src="jquery.js"></script>
    <script>
      $(function() {
        $('#action').click(function() {
          $('#r').html('<img src="http://www.mediaforma.com/sdz/jquery/ajax-loader.gif">');	
		  $('#r').load('a.php');
        });  
      });
	  
	/*
      $(function() {
        $('#action').click(function() {
          $('#r').html('<img src="http://www.mediaforma.com/sdz/jquery/ajax-loader.gif">');
          var param = 'l=' + $('#ref').val();
          $('#r').load('http://localhost/tpPhp/proverbes.php',param);
        });  
      });
	  //https://openclassrooms.com/courses/simplifiez-vos-developpements-javascript-avec-jquery/premiers-pas-avec-ajax	
	*/
    </script>
  </body>
</html>
