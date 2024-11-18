<?php

declare(strict_types=1);

namespace IchHabRecht\HideUsedContent\EventListener;

use TYPO3\CMS\Core\Configuration\Event\AfterTcaCompilationEvent;

class TcaColPosEventListener
{
    public function __invoke(AfterTcaCompilationEvent $event)
    {
        $this->initializeColPosCache($event->getTca());
    }

    public function initializeColPosCache(array $tca): array
    {
        $configuration = [];

        foreach ($tca as $table => $tableConfiguration) {
            if (empty($tableConfiguration['columns'])) {
                continue;
            }

            foreach ($tableConfiguration['columns'] as $field => $fieldConfiguration) {
                if (!$this->isInlineField($fieldConfiguration)
                    || !$this->isValidForeignTable($fieldConfiguration)
                    || !$this->hasColPosConfiguration($fieldConfiguration)
                ) {
                    continue;
                }

                $colPos = (int)$fieldConfiguration['config']['overrideChildTca']['columns']['colPos']['config']['default'];
                if (!isset($configuration[$colPos][$table])) {
                    $configuration[$colPos][$table] = [];
                }
                $configuration[$colPos][$table][] = $field;
            }
        }
        $tca['pages']['_hide_used_content_configuration'] = $configuration;

        return [$tca];
    }

    protected function isInlineField(array $fieldConfiguration): bool
    {
        return !empty($fieldConfiguration['config']['type'])
            && $fieldConfiguration['config']['type'] === 'inline';
    }

    protected function isValidForeignTable(array $fieldConfiguration): bool
    {
        return !empty($fieldConfiguration['config']['foreign_table'])
            && !empty($fieldConfiguration['config']['foreign_field'])
            && $fieldConfiguration['config']['foreign_table'] === 'tt_content';
    }

    protected function hasColPosConfiguration(array $fieldConfiguration): bool
    {
        return !empty($fieldConfiguration['config']['overrideChildTca']['columns']['colPos']['config']['default']);
    }
}
