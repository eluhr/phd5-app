<?php

// @group mandatory

$I = new E2eTester($scenario);

$I->wantTo('ensure that JavaScript works');

$I->amGoingTo('check javascript with a modal');

$I->amOnPage('/en');
$I->dontSee('#phd-info-panel');
$I->dontSee('App Version');
$I->dontSee('Project Version');

$I->login('editor', 'editor1');

$I->amGoingTo('hide the info button');
$I->pressKey("body", "h");
$I->dontSee('#phd-info-button a');

$I->amGoingTo('show the info button');
$I->pressKey("body", "h");
$I->click('#phd-info-button a[data-target="#phd-info-modal"]');
$I->waitForElementVisible('#phd-info-modal',3);
$I->seeElement('#phd-info-modal');
$I->makeScreenshot('modal');

$I->click('#phd-info-modal .close');
$I->dontSee('#phd-info-modal');
