<?php
defined('TYPO3_MODE') or die();

$locallangPath = 'LLL:EXT:rs_securedownload/Resources/Private/Language/locallang_db.xml';
return [
    'ctrl' =>  [
        'title'     => $locallangPath . ':tx_rssecuredownload_codes',
        'label'     => 'title',
        'tstamp'    => 'tstamp',
        'crdate'    => 'crdate',
        'cruser_id' => 'cruser_id',
        'default_sortby' => 'ORDER BY crdate',
        'delete' => 'deleted',
        'enablecolumns' =>  [
            'disabled' => 'hidden',
            'starttime' => 'starttime',
            'endtime' => 'endtime',
        ],
        'iconfile' => 'EXT:rs_securedownload/Resources/Public/Icons/icon_tx_rssecuredownload_codes.gif',
    ],
    'interface' =>  [
        'showRecordFieldList' => 'hidden,starttime,endtime,title,description,codeprompt,code,file'
    ],
    'columns' =>  [
        'hidden' =>  [
            'exclude' => 0,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.hidden',
            'config'  =>  [
                'type'    => 'check',
                'default' => '0'
            ]
        ],
        'starttime' =>  [
            'exclude' => 0,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.starttime',
            'config'  =>  [
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'default'  => '0',
                'checkbox' => '0'
            ]
        ],
        'endtime' =>  [
            'exclude' => 0,
            'label'   => 'LLL:EXT:lang/locallang_general.xml:LGL.endtime',
            'config'  =>  [
                'type'     => 'input',
                'size'     => '8',
                'max'      => '20',
                'eval'     => 'date',
                'checkbox' => '0',
                'default'  => '0',
                'range'    =>  [
                    'upper' => mktime(0, 0, 0, 12, 31, 2030),
                    'lower' => mktime(0, 0, 0, date('m')-1, date('d'), date('Y'))
                ]
            ]
        ],
        'title' =>  [
            'exclude' => 0,
            'label' => $locallangPath . ':tx_rssecuredownload_codes.title',
            'config' =>  [
                'type' => 'input',
                'size' => '30',
                'eval' => 'required,trim',
            ]
        ],
        'description' =>  [
            'exclude' => 0,
            'label' => $locallangPath . ':tx_rssecuredownload_codes.description',
            'config' =>  [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ]
        ],
        'codeprompt' =>  [
            'exclude' => 0,
            'label' => $locallangPath . ':tx_rssecuredownload_codes.codeprompt',
            'config' =>  [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ]
        ],
        'code' =>  [
            'exclude' => 0,
            'label' => $locallangPath . ':tx_rssecuredownload_codes.code',
            'config' =>  [
                'type' => 'input',
                'size' => '30',
                'eval' => 'required,trim',
            ]
        ],
        'file' =>  [
            'exclude' => 0,
            'label' => $locallangPath . ':tx_rssecuredownload_codes.file',
            'config' =>  [
                'type' => 'group',
                'internal_type' => 'file',
                'allowed' => '',
                'disallowed' => 'php,php3',
                'max_size' => 100000,
                'uploadfolder' => 'uploads/tx_rssecuredownload',
                'show_thumbs' => 1,
                'size' => 2,
                'minitems' => 0,
                'maxitems' => 1,
            ]
        ],
    ],
    'types' =>  [
        '0' => ['showitem' => 'hidden;;1;;1-1-1, title;;;;2-2-2, description;;;richtext[*];3-3-3, codeprompt, code, file']
    ],
    'palettes' =>  [
        '1' => ['showitem' => 'starttime, endtime']
    ]
];
