<style>
.head {
	font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	font-size: 74px;
	
	font-weight: normal;
	align-self: center;
	display: flex;
	color: #e2e2e2;
	margin-bottom: 0px;
	margin-top: 0px;
}

.sub-head {
	font-family: "Avant Garde", Avantgarde, "Century Gothic", CenturyGothic, AppleGothic, sans-serif;
	font-size: 24px;
	
	font-weight: normal;
	display: flex;
	text-align: center;
	color: #e2e2e2;
	margin-bottom: 0px;
	padding-left: 26px;
	padding-bottom: 12px;
}


div {
    

    position: fixed;
    top: 32%;
    left: 35%;
    
}
</style>
<div>
	<?php //print_r($output); ?>
	<p><?php 
	if($output!= NULL){
	if(array_key_exists('status_detail', $output)) {echo "Status : ".$output['status_detail']['title'];
}
}
?>
		
	</p>
		<p><?php 
	if($output!= NULL){
	if(array_key_exists('status_detail', $output)) {echo "Detail : ".$output['status_detail']['description'];
}
}
?>
		
	</p>
<form action="../usercpanel/index.php" method="post">
	<input type="text" name="username" value="" placeholder="username">
	<input type="text" name="password" value="" placeholder="password">
	<button type="submit">Submit</button>

</form>
</div>