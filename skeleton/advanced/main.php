<?php

$firstHandler = new FirstHandler();
$secondHandler = new SecondHandler();
$thirdHandler = new ThirdHandler();

//the code below sets all successors through the first handler
$firstHandler->setSuccessor($secondHandler);
$firstHandler->setSuccessor($thirdHandler);

$result = $firstHandler->handle($request);