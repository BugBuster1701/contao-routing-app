<?php
// nach https://github.com/contao/core-bundle/pull/512
// src/AppBundle/Resources/contao/config/config.php
$GLOBALS['TL_HOOKS']['getUserNavigation'][] = ['routing_app.user_navigation_listener', 'onGetUserNavigation'];

/*
 * vendor/bin/contao-console cache:clear --env prod --no-warmup
 * vendor/bin/contao-console cache:warmup --env prod
 */