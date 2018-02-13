<?php
include_once "Insulter.php";

function insult() {
	return Insulter::insult();
}

function insultName( $name ) {
	return Insulter::namedInsult( $name );
}

if ( isset( $_GET['name'] ) ) {
	echo insultName( $_GET['name'] );
} else {
	echo insult();
}