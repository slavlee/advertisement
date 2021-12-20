<?php
defined('TYPO3') || die();

(static function() {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
        'Advertisement',
        'Zone',
        [
            \Slavlee\Advertisement\Controller\ZoneController::class => 'show'
        ],
        // non-cacheable actions
        [
            \Slavlee\Advertisement\Controller\ZoneController::class => 'show'
        ]
    );

    // wizards    
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
    	"@import 'EXT:advertisement/Configuration/TSconfig/Page/Mod/Wizards/Groups.tsconfig'
    	 @import 'EXT:advertisement/Configuration/TSconfig/Page/Mod/Wizards/Plugins.tsconfig'
		 @import 'EXT:advertisement/Configuration/TSconfig/Page/Mod/Wizards/Banner.tsconfig'"
	);
    
    // Icons
    $iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
    $iconRegistry->registerIcon(
    	'apps-pagetree-folder-contains-advertisement',
    	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    	['source' => 'EXT:advertisement/Resources/Public/Icons/Extension.svg']
	);
    $iconRegistry->registerIcon(
    	'ad-banner',
    	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
    	['source' => 'EXT:advertisement/Resources/Public/Icons/user_plugin_banner.svg']
    );
})();