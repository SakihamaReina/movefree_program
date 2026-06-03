<?php
$score = 75;

if($score >= 90) {
    print "score={$score}:優";
}
elseif($score >= 70) {
    print "score={$score}:良";
}
elseif($score >= 50) {
    print "score={$score}:可";
}
else {
    print "score={$score}:不可";
}