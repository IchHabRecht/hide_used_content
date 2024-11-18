<?php

defined('TYPO3') || die('Access denied.');

call_user_func(function () {
    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['cms/layout/class.tx_cms_layout.php']['record_is_used']['hide_used_content'] =
        \IchHabRecht\HideUsedContent\Hooks\PageLayoutViewHook::class . '->hideUsedContent';
});
