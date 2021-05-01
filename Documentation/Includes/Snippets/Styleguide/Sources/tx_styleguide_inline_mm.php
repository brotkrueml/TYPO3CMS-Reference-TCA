<?php // Example from extension "styleguide", table "tx_styleguide_flex"

return [
   // [start ctrl]
   'ctrl' => [ 
      'title' => 'Form engine - inline MM',
      'label' => 'title',
      'tstamp' => 'tstamp',
      'crdate' => 'crdate',
      'cruser_id' => 'cruser_id',
      'languageField' => 'sys_language_uid',
      'transOrigPointerField' => 'l10n_parent',
      'transOrigDiffSourceField' => 'l10n_diffsource',
      'translationSource' => 'l10n_source',
      'sortby' => 'sorting',
      'delete' => 'deleted',
      'enablecolumns' => [ 
         'disabled' => 'hidden',
      ],
      'iconfile' => 'EXT:styleguide/Resources/Public/Icons/tx_styleguide.svg',
      'versioningWS' => true,
      'origUid' => 't3_origuid',
   ],
   // [end ctrl]
   // [start columns]
   'columns' => [ 
      // [start sys_language_uid]
      'sys_language_uid' => [ 
         'exclude' => true,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
         'config' => [ 
            'type' => 'language',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mm"
      // [end sys_language_uid]
      // [start l10n_parent]
      'l10n_parent' => [ 
         'displayCond' => 'FIELD:sys_language_uid:>:0',
         'label' => 'Translation parent',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => 0,
               ],
            ],
            'foreign_table' => 'tx_styleguide_inline_mm',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_mm}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_mm}.{#sys_language_uid} IN (-1,0)',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mm"
      // [end l10n_parent]
      // [start l10n_source]
      'l10n_source' => [ 
         'exclude' => true,
         'displayCond' => 'FIELD:sys_language_uid:>:0',
         'label' => 'Translation source',
         'config' => [ 
            'type' => 'select',
            'renderType' => 'selectSingle',
            'items' => [ 
               '0' => [ 
                  '0' => '',
                  '1' => 0,
               ],
            ],
            'foreign_table' => 'tx_styleguide_inline_mm',
            'foreign_table_where' => 'AND {#tx_styleguide_inline_mm}.{#pid}=###CURRENT_PID### AND {#tx_styleguide_inline_mm}.{#uid}!=###THIS_UID###',
            'default' => 0,
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mm"
      // [end l10n_source]
      // [start l10n_diffsource]
      'l10n_diffsource' => [ 
         'config' => [ 
            'type' => 'passthrough',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mm"
      // [end l10n_diffsource]
      // [start hidden]
      'hidden' => [ 
         'exclude' => 1,
         'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.hidden',
         'config' => [ 
            'type' => 'check',
            'default' => '0',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mm"
      // [end hidden]
      // [start title]
      'title' => [ 
         'exclude' => 1,
         'l10n_mode' => 'prefixLangTitle',
         'label' => 'Title',
         'config' => [ 
            'type' => 'input',
            'size' => '30',
            'eval' => 'required',
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mm"
      // [end title]
      // [start inline_1]
      'inline_1' => [ 
         'exclude' => 1,
         'label' => 'inline_1',
         'config' => [ 
            'type' => 'inline',
            'foreign_table' => 'tx_styleguide_inline_mm_child',
            'MM' => 'tx_styleguide_inline_mm_child_rel',
            'MM_hasUidField' => true,
            'appearance' => [ 
               'showSynchronizationLink' => 1,
               'showAllLocalizationLink' => 1,
               'showPossibleLocalizationRecords' => 1,
               'showRemovedLocalizationRecords' => 1,
            ],
         ],
      ],
      // Example from extension "styleguide", table "tx_styleguide_inline_mm"
      // [end inline_1]
   ],
   // [end columns]
   // [start types]
   'types' => [ 
      '0' => [ 
         'showitem' => '
                --div--;General, title, inline_1,
                --div--;Visibility, sys_language_uid, l18n_parent,l18n_diffsource, hidden
            ',
      ],
   ],
   // [end types]
];