<?php

return function (Slim\App $app) {
    $settings = $app->getContainer()->get('settings');

    $app->addErrorMiddleware(
        $settings['displayErrorDetails'],
        $settings['logErrors'],
        $settings['logErrorDetails']);

};