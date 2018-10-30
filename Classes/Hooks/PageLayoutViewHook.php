<?php
declare(strict_types = 1);
namespace IchHabRecht\HideUsedContent\Hooks;

use IchHabRecht\HideUsedContent\Cache\CacheManager;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class PageLayoutViewHook
{
    /**
     * @var array
     */
    protected $columnConfiguration;

    public function __construct(CacheManager $cacheManager = null)
    {
        if ($cacheManager === null) {
            $cacheManager = GeneralUtility::makeInstance(CacheManager::class);
        }

        $this->columnConfiguration = $cacheManager->get();
    }

    public function hideUsedContent(array $parameter): bool
    {
        if ($parameter['used']) {
            return true;
        }

        $record = $parameter['record'];
        $colPos = (int)$record['colPos'];

        $columnConfiguration = $this->columnConfiguration[$colPos] ?? [];
        foreach ($columnConfiguration as $table => $fieldArray) {
            foreach ($fieldArray as $field) {
                $fieldConfiguration = $GLOBALS['TCA'][$table]['columns'][$field]['config'];
                if (empty($record[$fieldConfiguration['foreign_field']])) {
                    continue;
                }

                return true;
            }
        }

        return false;
    }
}
