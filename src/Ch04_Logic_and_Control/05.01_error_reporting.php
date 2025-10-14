<?php

// deliberate Warning error
print $undefVar;

// report fatal Error runtime errors only
error_reporting(E_ERROR);
print $anotherUndefVar;
