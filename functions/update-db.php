<?php

function data_update($dbc, $table_name, $change, $identity){        # function to update data of any tables

	$q = "UPDATE ".$table_name." SET ".$change." WHERE ".$identity;
	$r = mysqli_query($dbc, $q);

	unset($table_name, $change, $identity, $q, $r);

}

?>
