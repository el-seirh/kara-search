	<?php 
		$csv = array_map('str_getcsv', file('csv/all.csv'));
	
	//echo '<pre>'; 
	//print_r($csv);
	//echo '</pre>';
	?>
	<table id="karalist" class="display" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Artist</th>
                <th>Song</th>
            </tr>
        </thead>
        
        <tfoot>
            <tr>
                <th>Artist</th>
                <th>Song</th>
            </tr>
        </tfoot>
 
        <tbody>
        		<?php foreach($csv as $row){
        			echo '<tr>';
        			foreach($row as $value){
        				echo '<td>' . $value . '</td>';
        			}
        			echo '</tr>';
        		} ?>
        </tbody>
        		
    </table>