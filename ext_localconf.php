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
});
