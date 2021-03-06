<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

$languagePrefix = 'LLL:EXT:jk_poll/Resources/Private/Language/locallang_db.xlf:';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages('tx_jkpoll_poll');

$TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_pi1'] = 'layout,select_key';
$TCA['tt_content']['types']['list']['subtypes_addlist'][$_EXTKEY . '_pi1'] = 'pi_flexform';

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(array($languagePrefix . 'tt_content.list_type_pi1', $_EXTKEY . '_pi1'), 'list_type');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Poll');
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($_EXTKEY . '_pi1', 'FILE:EXT:jk_poll/flexform_ds.xml');

unset($languagePrefix);