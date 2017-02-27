<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}

$TCA['tx_rssecuredownload_codes'] =  [
    'ctrl' => $TCA['tx_rssecuredownload_codes']['ctrl'],
    'interface' =>  [
        'showRecordFieldList' => 'hidden,starttime,endtime,title,description,codeprompt,code,file'
    ],
    'feInterface' => $TCA['tx_rssecuredownload_codes']['feInterface'],
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
            'label' => 'LLL:EXT:rs_securedownload/locallang_db.xml:tx_rssecuredownload_codes.title',
            'config' =>  [
                'type' => 'input',
                'size' => '30',
                'eval' => 'required,trim',
            ]
        ],
        'description' =>  [
            'exclude' => 0,
            'label' => 'LLL:EXT:rs_securedownload/locallang_db.xml:tx_rssecuredownload_codes.description',
            'config' =>  [
                'type' => 'text',
                'cols' => '30',
                'rows' => '5',
            ]
        ],
        'codeprompt' =>  [
            'exclude' => 0,
            'label' => 'LLL:EXT:rs_securedownload/locallang_db.xml:tx_rssecuredownload_codes.codeprompt',
            'config' =>  [
                'type' => 'input',
                'size' => '30',
                'eval' => 'trim',
            ]
        ],
        'code' =>  [
            'exclude' => 0,
            'label' => 'LLL:EXT:rs_securedownload/locallang_db.xml:tx_rssecuredownload_codes.code',
            'config' =>  [
                'type' => 'input',
                'size' => '30',
                'eval' => 'required,trim',
            ]
        ],
        'file' =>  [
            'exclude' => 0,
            'label' => 'LLL:EXT:rs_securedownload/locallang_db.xml:tx_rssecuredownload_codes.file',
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
