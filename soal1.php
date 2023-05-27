<?php
function groupAnagrams($strings) {
    $anagram_dict = [];
    foreach ($strings as $string) {
        $sorted_string = str_split($string);
        sort($sorted_string);
        $sorted_string = implode('', $sorted_string);
        if (isset($anagram_dict[$sorted_string])) {
            $anagram_dict[$sorted_string][] = $string;
        } else {
            $anagram_dict[$sorted_string] = [$string];
        }
    }

    $grouped_anagrams = [];
    foreach ($anagram_dict as $value) {
        $grouped_anagrams[] = $value;
    }

    return $grouped_anagrams;
}

$strings = ['cook', 'save', 'taste', 'aves', 'vase', 'state', 'map'];
$result = groupAnagrams($strings);
print_r($result);

?>