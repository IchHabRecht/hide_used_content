<?php

/***************************************************************
 * Extension Manager/Repository config file for ext "hide_used_content".
 *
 * Auto generated 31-08-2023 11:11
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
  'version' => '1.1.0',
  'constraints' =>
  array (
    'depends' =>
    array (
      'typo3' => '9.5.0-11.5.99',
    ),
    'conflicts' =>
    array (
    ),
    'suggests' =>
    array (
    ),
  ),
  '_md5_values_when_last_written' => 'a:14:{s:9:"ChangeLog";s:4:"b010";s:7:"LICENSE";s:4:"b234";s:9:"README.md";s:4:"3356";s:13:"composer.json";s:4:"484d";s:13:"composer.lock";s:4:"769e";s:12:"ext_icon.png";s:4:"ad17";s:17:"ext_localconf.php";s:4:"ea19";s:16:"phpunit.xml.dist";s:4:"316a";s:24:"sonar-project.properties";s:4:"3a2b";s:30:"Classes/Cache/CacheManager.php";s:4:"7606";s:48:"Classes/EventListener/TcaColPosEventListener.php";s:4:"73f4";s:36:"Classes/Hooks/PageLayoutViewHook.php";s:4:"91e0";s:27:"Configuration/Services.yaml";s:4:"53f6";s:36:"Resources/Public/Icons/Extension.svg";s:4:"0e56";}',
);

