<?php
	$dateTime = new \DateTime();

		//21/09/1982
		$data_nascimento = DateTime::createFromFormat('d/m/Y', "27/02/1999");

		$diff = $data_nascimento->diff($dateTime); 

		print_r($diff->y);