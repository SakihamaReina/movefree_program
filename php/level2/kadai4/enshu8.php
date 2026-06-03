<?php

for ($i=1 ; $i < 10 ; $i++) {

    for ($j=1 ; $j < 10 ; $j++) {
        $result = $i * $j;
        if ($result > 40) {
          break 2;
        }
        print $result . ' ';
    }
    print "\n";
    
}

for ($i=1 ; $i < 10 ; $i++) {

    for ($j=1 ; $j < 10 ; $j++) {
        $result = $i * $j;
        if ($result > 40) {
          goto end;
        }
        print $result . ' ';
    }
    print "\n";
    
}
end: