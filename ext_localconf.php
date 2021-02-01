<?php

defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function ($extKey) {
        // Register file extension "dorftv"
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['mediafile_ext'] .= ',dorftv';

        // Register the online media helper
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['fal']['onlineMediaHelpers']['dorftv']
            = \TillBusch\Dorftv\Resource\OnlineMedia\Helpers\DorftvHelper::class;

        // Register the mime type
        $GLOBALS['TYPO3_CONF_VARS']['SYS']['FileInfo']['fileExtensionToMimeType']['dorftv'] = 'video/dorftv';

        // Register the renderer for the frontend
        $rendererRegistry = \TYPO3\CMS\Core\Resource\Rendering\RendererRegistry::getInstance();
        $rendererRegistry->registerRendererClass(\TillBusch\Dorftv\Resource\Rendering\DorftvRenderer::class);
    },
    $_EXTKEY
);
