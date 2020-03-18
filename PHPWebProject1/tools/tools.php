<?php

/**
 * tools short summary.
 *
 * tools description.
 *
 * @version 1.0
 * @author Bartek
 */
function playerImgName($_name, $_lastName)
{

    $FileName = replacePolishCharacters($_name.'-'.$_lastName).'.jpg';

    return $FileName;
}

function replacePolishCharacters($string){
	$a = array( 'Ę', 'Ó', 'Ą', 'Ś', 'Ł', 'Ż', 'Ź', 'Ć', 'Ń', 'ę', 'ó', 'ą',
				'ś', 'ł', 'ż', 'ź', 'ć', 'ń' );
	$b = array( 'E', 'O', 'A', 'S', 'L', 'Z', 'Z', 'C', 'N', 'e', 'o', 'a',
				's', 'l', 'z', 'z', 'c', 'n' );

	$string = str_replace( $a, $b, $string );
	$string = preg_replace( '#[^a-z0-9]#is', ' ', $string );
	$string = trim( $string );
	$string = preg_replace( '#\s{2,}#', ' ', $string );
	$string = str_replace( ' ', '-', $string );
	$string = strtolower($string);
	return $string;
}

function checkPlayerImage($playerImage){
	$img_dir = '/images';
	$player_images = scandir($img_dir);
	print_r($player_images);
	if (in_array($playerImage, $player_images)) {
		$playerImage = $playerImage;
		echo $playerImage;
	}
	else {
		$playerImage = 'default.jpg';
		echo $playerImage;
	}

}
?>