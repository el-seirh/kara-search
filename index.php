<html>
<head>
	<meta charset="utf-8" />
   <title>Beachpardee Karaoke Song Search</title>
	<link rel="stylesheet" href="jquery/datatables/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="style.css">
</head>
 <body>
 
 <div id="tablediv"></div>
 
	<script src="jquery/jquery-1.11.1.min.js"></script>
	<script src="jquery/datatables/js/jquery.dataTables.min.js"></script>
    	<script>
 
    		$( document ).ready(function() {
    		
    				$('#tablediv').html('<div id="loader">Bidde wardn ...<br /><br /><img src="loader.jpg" /></div>');
    		
    				$('#tablediv').load('table.php', function() {
 						 
 						 $('#karalist').dataTable( {
        			 		"order": [[ 0, "asc" ]],
        			 		"pageLength": 100
    				 	});
					});
			});
 
    	</script>
    	
    	
    	
 </body>
</html>
