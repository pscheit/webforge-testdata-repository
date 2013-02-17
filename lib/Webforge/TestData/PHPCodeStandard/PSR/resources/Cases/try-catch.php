<?php
try {
    echo 'try body';
} catch (FirstExceptionType $e) {
    echo 'catch body 1';
} catch (OtherExceptionType $e) {
    echo 'catch body 2';
}
