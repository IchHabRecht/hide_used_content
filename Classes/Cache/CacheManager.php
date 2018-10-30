<?php
declare(strict_types = 1);
namespace IchHabRecht\HideUsedContent\Cache;

use TYPO3\CMS\Core\Cache\Frontend\PhpFrontend;
use TYPO3\CMS\Core\Utility\GeneralUtility;

class CacheManager
{
    /**
     * @var PhpFrontend
     */
    protected $cache;

    protected $cacheIdentifier = 'tx_hideusedcontent';

    public function __construct(PhpFrontend $cache = null)
    {
        $this->cache = $cache ?: GeneralUtility::makeInstance(\TYPO3\CMS\Core\Cache\CacheManager::class)->getCache('cache_core');
    }

    public function get()
    {
        $cacheData = $this->cache->require($this->cacheIdentifier);

        return $cacheData['configuration'] ?? [];
    }

    public function set(array $configuration)
    {
        $this->cache->set(
            $this->cacheIdentifier,
            'return '
            . var_export(
                [
                    'configuration' => $configuration,
                ],
                true
            )
            . ';'
        );
    }
}
