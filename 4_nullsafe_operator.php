<?php
$session = null;
	// $country = null;
	if( $session !== null ){
		$user = $session->user;

		if( $user !== null ){
			$address = $user->getAddress();
		}

		if( $address !== null ){
			$country = $address->country;
		}
	}

	echo $session?->user?->getAddress()?->country;

?>