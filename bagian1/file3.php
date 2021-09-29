<?php
	
	function UBT($input)
	{
		$arr_input = explode(' ', $input);

		// unigram
		$unigram = '';
		foreach ($arr_input as $item) {
			$unigram .= $item.', ';
		}
		$unigram = substr($unigram, 0, -2);

		// bigram
		$x = 0;
		$bigram = '';
		foreach ($arr_input as $item) {
			if ($x < 1) {
				$bigram .= $item.' ';
				$x++;
			} else {
				$bigram .= $item.', ';
				$x = 0;
			}
		}
		$bigram = substr($bigram, 0, -2);

		// trigram
		$y = 0;
		$trigram = '';
		foreach ($arr_input as $item) {
			if ($y < 2) {
				$trigram .= $item.' ';
				$y++;
			} else {
				$trigram .= $item.', ';
				$y = 0;
			}
		}
		$trigram = substr($trigram, 0, -2);


		$result = "Unigram : ". $unigram . "\n";
		$result .= "Bigram : ". $bigram . "\n";
		$result .= "Trigram : ". $trigram;

		return $result;
	}

	echo UBT('Jakarta adalah ibukota negara Republik Indonesia');
  
	// Unigram : Jakarta, adalah, ibukota, negara, Republik, Indonesia
	// Bigram : Jakarta adalah, ibukota negara, Republik Indonesia
	// Trigram : Jakarta adalah ibukota, negara Republik Indonesia
