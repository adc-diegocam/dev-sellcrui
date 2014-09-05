<?php

for ($count = 1; $count <= 100; $count++) {
    if ($count % 3 == 0 && $count % 5 == 0) {
        print "FizzBuzz<br />";
    } else if ($count % 3 == 0) {
        print "Fizz<br />";
    } else if ($count % 5 == 0) {
        print "Buzz<br />";
    } else {
        print $count . "<br />";
    }
}

