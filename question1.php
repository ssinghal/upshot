<?php

//function with two params nstring contains normal string and astring contains anagram string

function anagram($nSting, $aString)
{
//asort is an php inbuild function which returns the array with and asort is for sorting the array
if(asort(count_chars($nSting,1))==asort(count_chars($aString,1)))
return "Yes ($nSting) is matching as a anagram string";
else
return "No ($nSting) is not matching as a anagram string";
}


//Output of that function
echo anagram("Upshot Tech", "Hutches Top");
?>


