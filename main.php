<?php   
// inspired by inanzzz
    function strigToBinary($string)
    {
        $characters = str_split($string);
        
        $binary = [];
        foreach ($characters as $character) {
            $data = unpack('H*', $character);
            $binary[] = base_convert($data[1], 16, 2);
        }
        
        return implode(' ', $binary);    
    }
        
    function binaryToString($binary)
    {
        $binaries = explode(' ', $binary);
        
        $string = null;
        foreach ($binaries as $binary) {
            $string .= pack('H*', dechex(bindec($binary)));
        }
        
        return $string;    
    }

    $string = readline("Masukkan Kata : ");
    echo 'STRING: '.$string.PHP_EOL;
    echo 'BINARY: '.$binary = strigToBinary($string).PHP_EOL;
    echo 'STRING: '.binaryToString($binary).PHP_EOL;
?>