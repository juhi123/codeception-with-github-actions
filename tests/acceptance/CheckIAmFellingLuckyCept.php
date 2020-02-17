<?php

/**
 * Scenario : To test if I am feeling luck is visible
 */

$I = new AcceptanceTester( $scenario );
$I->wantTo( 'To test if I am feeling luck is visible' );

$I->amOnPage('/');

//Element for I'm feeling luck
$I->seeElement('.RNmpXc');

echo "I'm feeling lucky is visible";


?>