<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "hide_used_content".
 *
 * Auto generated 25-06-2020 15:18
 *
 * Manual updates:
 * Only the data in the array - everything else is removed by next
 * writing. "version" and "dependencies" must not be touched!
 ***************************************************************/

$EM_CONF[$_EXTKEY] = array (
  'title' => 'Hide used content elements',
  'description' => 'Removes used content elements with own colPos configuration from "Unused" column',
  'category' => 'misc',
  'author' => 'Nicole Cordes',
  'author_email' => 'typo3@cordes.co',
  'author_company' => 'biz-design',
  'state' => 'stable',
  'uploadfolder' => 0,
  'createDirs' => '',
  'clearCacheOnLoad' => 0,
  'version' => '2.0.0',
  'constraints' =>
  array (
    'depends' =>
    array (
      'typo3' => '11.4.0-11.5.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:12:{s:9:"ChangeLog";s:4:"8282";s:7:"LICENSE";s:4:"b234";s:9:"README.md";s:4:"3356";s:13:"composer.json";s:4:"817d";s:12:"ext_icon.png";s:4:"ad17";s:17:"ext_localconf.php";s:4:"7562";s:16:"phpunit.xml.dist";s:4:"041c";s:24:"sonar-project.properties";s:4:"bd01";s:30:"Classes/Cache/CacheManager.php";s:4:"b7f6";s:36:"Classes/Hooks/PageLayoutViewHook.php";s:4:"8a3e";s:30:"Classes/Slot/TcaColPosSlot.php";s:4:"bd2a";s:36:"Resources/Public/Icons/Extension.svg";s:4:"0e56";}',
);

