<?php

class Insulter {

	static function insult() {
		return "Thou " . self::generateInsult() . "!";
	}

	static function namedInsult( $name ) {
		return $name . ", thou " . self::generateInsult() . "!";
	}

	static function generateInsult() {
		$firstAdjs = array( 
			"artless", 
			"bawly", 
			"beslubbering", 
			"bootless", 
			"chrlish" 
		);
		$secondAdjs = array( 
			"base-court", 
			"bat-fowling", 
			"beef-witted", 
			"beetle-headed", 
			"boil-brained" 
		);
		$nouns = array( 
			"apple-john", 
			"baggage", 
			"barnacle", 
			"bladder", 
			"boar-pig" 
		);
		
		return $firstAdjs[rand( 0, count( $firstAdjs ) - 1 )] . " " . $secondAdjs[rand( 0, count( $secondAdjs ) - 1 )] . " " . $nouns[rand( 0, count( $nouns ) - 1 )];
	}
}