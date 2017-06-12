<?php

$firstHandler = new FirstHandler();
$secondHandler = new SecondHandler();
$thirdHandler = new ThirdHandler();

$firstHandler->setSuccessor($secondHandler);
$secondHandler->setSuccessor($thirdHandler);

$result = $firstHandler->handle($request);