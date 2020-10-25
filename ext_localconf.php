<?php

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(function () {
    $dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(TYPO3\CMS\Extbase\SignalSlot\Dispatcher::class);
    $dispatcher->connect(
        \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::class,
        'tcaIsBeingBuilt',
        \IchHabRecht\HideUsedContent\Slot\TcaColPosSlot::class,
        'initializeColPosCache'
    );

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['record_is_used']['hide_used_content'] =
        \IchHabRecht\HideUsedContent\Hooks\PageLayoutViewHook::class . '->hideUsedContent';
});
