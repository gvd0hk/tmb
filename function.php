<?php

function reform_json($json) {
	$result      = '';
	$pos         = 0;
	$strLen      = strlen($json);
	$indentStr   = '  ';
	$newLine     = "\n";
	$prevChar    = '';
	$outOfQuotes = true;

	for ($i=0; $i<=$strLen; $i++) {

		// Grab the next character in the string.
		$char = substr($json, $i, 1);

		// Are we inside a quoted string?
		if ($char == '"' && $prevChar != '\\') {
			$outOfQuotes = !$outOfQuotes;

		// If this character is the end of an element,
		// output a new line and indent the next line.
		} else if(($char == '}' || $char == ']') && $outOfQuotes) {
			$result .= $newLine;
			$pos --;
			for ($j=0; $j<$pos; $j++) {
				$result .= $indentStr;
			}
		}

		// Add the character to the result string.
		$result .= $char;

		// If the last character was the beginning of an element,
		// output a new line and indent the next line.
		if (($char == ',' || $char == '{' || $char == '[') && $outOfQuotes) {
			$result .= $newLine;
			if ($char == '{' || $char == '[') {
				$pos ++;
			}

			for ($j = 0; $j < $pos; $j++) {
				$result .= $indentStr;
			}
		}

		$prevChar = $char;
	}

	return $result;

}

function format_json($json, $html = false, $tabspaces = null)
	{
		$tabcount = 0;
		$result = '';
		$inquote = false;
		$ignorenext = false;

		if ($html) {
			$tab = str_repeat("&nbsp;", ($tabspaces == null ? 4 : $tabspaces));
			$newline = "<br/>";
		} else {
			$tab = ($tabspaces == null ? "\t" : str_repeat(" ", $tabspaces));
			$newline = "\n";
		}

		for($i = 0; $i < strlen($json); $i++) {
			$char = $json[$i];

			if ($ignorenext) {
				$result .= $char;
				$ignorenext = false;
			} else {
				switch($char) {
					case ':':
						$result .= $char . (!$inquote ? " " : "");
						break;
					case '{':
						if (!$inquote) {
							$tabcount++;
							$result .= $char . $newline . str_repeat($tab, $tabcount);
						}
						else {
							$result .= $char;
						}
						break;
					case '}':
						if (!$inquote) {
							$tabcount--;
							$result = trim($result) . $newline . str_repeat($tab, $tabcount) . $char;
						}
						else {
							$result .= $char;
						}
						break;
					case ',':
						if (!$inquote) {
							$result .= $char . $newline . str_repeat($tab, $tabcount);
						}
						else {
							$result .= $char;
						}
						break;
					case '"':
						$inquote = !$inquote;
						$result .= $char;
						break;
					case '\\':
						if ($inquote) $ignorenext = true;
						$result .= $char;
						break;
					default:
						$result .= $char;
				}
			}
		}

		return $result;
	}

function request($url, $params = array(), $method = 'GET') {
	if ( $method == 'POST' ) {
		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $params);  
	} else {
		if ( count($params) > 0 ) {
			$url = $url.'?';
			$total = count($params);
			$i = 1;
			foreach ( $params as $k => $v ) {
				$url .= $k.'='.$v;
				if ( $i < $total ) {
					$url .= '&';
				}
				$i++;
			}
		}
		$ch = curl_init($url);
	}
	curl_setopt($ch,CURLOPT_FOLLOWLOCATION,TRUE);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

function book_recommend() 
{
	$book = request("http://www.mbookstore.com/code-book_recommendation");
	return json_decode($book);
}

function isMobileCheck() 
{
	$isMobile = false;
	// $op = strtolower($_SERVER['HTTP_X_OPERAMINI_PHONE']);
	$ua = strtolower($_SERVER['HTTP_USER_AGENT']);
	$ac = strtolower($_SERVER['HTTP_ACCEPT']);
	$ip = $_SERVER['REMOTE_ADDR'];

	$isMobile = (strpos($ua, 'mobile') !== false  && strpos($ua, 'ipad') === false) || (strpos($ua, 'mobile') !== false  && strpos($ua, 'Android') !== false); 
	return $isMobile;
}