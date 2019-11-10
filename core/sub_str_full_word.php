<?php 
if ( ! function_exists( 'substr_full_word' ) ) {
	function substr_full_word( $str , $maxlen) {
		if ( strlen($str) <= $maxlen ) return $str;

		$newstr = substr($str, 0, $maxlen);
		if ( substr($newstr,-1,1) != ' ' ) $newstr = substr($newstr, 0, strrpos($newstr, " "));

		return $newstr.'...';
	}
}
?>