<?php

\Controller::loadLanguageFile('tl_content');

$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'] = array_merge(
    $GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'],
    [
        'fbi',
    ]
);

$GLOBALS['TL_DCA']['tl_page']['palettes']['regular'] = str_replace(
    'includeChmod;',
    'includeChmod;{fbi_legend:hide},fbi;',
    $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']
);

$GLOBALS['TL_DCA']['tl_page']['subpalettes'] = array_merge(
    $GLOBALS['TL_DCA']['tl_page']['subpalettes'],
    [
        'fbi_inherit'   => '',
        'fbi_disable'   => '',
        'fbi_choose'    => 'fbiSRC,sortBy,fbiImgMode,fbiTimeout,fbiSpeed,fbiEnableNav,fbiNavClick,fbiNavPrevNext,fbiCenterX,fbiCenterY',
    ]
);

$GLOBALS['TL_DCA']['tl_page']['fields'] = array_merge(
    $GLOBALS['TL_DCA']['tl_page']['fields'],
    [
        'fbi' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbi'],
            'default'   => 'inherit',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => [
                'inherit',
                'choose',
                'disable',
            ],
            'eval'      => [
                'helpwizard'        => true,
                'submitOnChange'    => true,
            ],
            'reference' => &$GLOBALS['TL_LANG']['tl_page'],
            'sql'       => "varchar(32) NOT NULL default ''",
        ],
        'fbiSRC' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbiSRC'],
            'exclude'   => true,
            'inputType' => 'fileTree',
            'eval'      => [
                'multiple'      => true,
                'fieldType'     => 'checkbox',
                'orderField'    => 'fbiOrder',
                'files'         => true,
                'mandatory'     => true,
                'isGallery'     => true,
            ],
            'sql'       => "blob NULL",
        ],
        'fbiOrder' => [
            'label' => &$GLOBALS['TL_LANG']['tl_page']['fbiOrder'],
            'sql'   => "blob NULL",
        ],
        'sortBy' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_content']['sortBy'],
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => [
                'custom',
                'name_asc',
                'name_desc',
                'date_asc',
                'date_desc',
                'random',
            ],
            'reference' => &$GLOBALS['TL_LANG']['tl_content'],
            'eval'      => [
                'tl_class' => 'w50',
            ],
            'sql'       => "varchar(32) NOT NULL default ''",
        ],
        'fbiImgMode' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbiImgMode'],
            'default'   => 'paMultiple',
            'exclude'   => true,
            'inputType' => 'select',
            'options'   => [
                'single',
                'random',
                'multiple',
            ],
            'reference' => &$GLOBALS['TL_LANG']['tl_page'],
            'eval'      => [
                'helpwizard'    => true,
                'chosen'        => true,
                'tl_class'      => 'w50',
            ],
            'sql'       => "varchar(32) NOT NULL default ''",
        ],
        'fbiTimeout' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbiTimeout'],
            'default'   => 12000,
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => [
                'rgxp'      => 'digit',
                'tl_class'  => 'w50',
            ],
            'sql'       => "varchar(10) NOT NULL default ''",
        ],
        'fbiSpeed' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbiSpeed'],
            'default'   => 1000,
            'exclude'   => true,
            'inputType' => 'text',
            'eval'      => [
                'rgxp'      => 'digit',
                'tl_class'  => 'w50',
            ],
            'sql'       => "varchar(10) NOT NULL default ''",
        ],
        'fbiEnableNav' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbiEnableNav'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => [
                'tl_class' => 'w50',
            ],
            'sql'       => "char(1) NOT NULL default ''",
        ],
        'fbiNavClick' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbiNavClick'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => [
                'tl_class' => 'w50',
            ],
            'sql'       => "char(1) NOT NULL default ''",
        ],
        'fbiNavPrevNext' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbiNavPrevNext'],
            'exclude'   => true,
            'inputType' => 'checkbox',
            'eval'      => [
                'tl_class' => 'clr m12',
            ],
            'sql'       => "char(1) NOT NULL default ''",
        ],
        'fbiCenterX' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbiCenterX'],
            'exclude'   => true,
            'default'   => 1,
            'inputType' => 'checkbox',
            'eval'      => [
                'tl_class' => 'w50',
            ],
            'sql'       => "char(1) NOT NULL default '1'",
        ],
        'fbiCenterY' => [
            'label'     => &$GLOBALS['TL_LANG']['tl_page']['fbiCenterY'],
            'exclude'   => true,
            'default'   => 1,
            'inputType' => 'checkbox',
            'eval'      => [
                'tl_class' => 'w50',
            ],
            'sql'       => "char(1) NOT NULL default '1'",
        ],
    ]
);

//$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'pam';
//$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'pam_root';
//$GLOBALS['TL_DCA']['tl_page']['palettes']['__selector__'][] = 'paOverwrite';
//$GLOBALS['TL_DCA']['tl_page']['palettes']['regular']        = str_replace('includeChmod;', 'includeChmod;{pa_legend:hide},pam;{pa_overwrite_legend:hide},paOverwrite;', $GLOBALS['TL_DCA']['tl_page']['palettes']['regular']);
//$GLOBALS['TL_DCA']['tl_page']['palettes']['forward']        = str_replace('includeChmod;', 'includeChmod;{pa_legend:hide},pam;{pa_overwrite_legend:hide},paOverwrite;', $GLOBALS['TL_DCA']['tl_page']['palettes']['forward']);
//$GLOBALS['TL_DCA']['tl_page']['palettes']['error_403']      = str_replace('includeChmod;', 'includeChmod;{pa_legend:hide},pam;{pa_overwrite_legend:hide},paOverwrite;', $GLOBALS['TL_DCA']['tl_page']['palettes']['error_403']);
//$GLOBALS['TL_DCA']['tl_page']['palettes']['error_404']      = str_replace('includeChmod;', 'includeChmod;{pa_legend:hide},pam;{pa_overwrite_legend:hide},paOverwrite;', $GLOBALS['TL_DCA']['tl_page']['palettes']['error_404']);
//$GLOBALS['TL_DCA']['tl_page']['palettes']['root']           = str_replace('includeChmod;', 'includeChmod;{pa_legend:hide},pam_root;', $GLOBALS['TL_DCA']['tl_page']['palettes']['root']);

//$GLOBALS['TL_DCA']['tl_page']['subpalettes']['pam_inherit'] = '';
//$GLOBALS['TL_DCA']['tl_page']['subpalettes']['pam_disable'] = '';
//$GLOBALS['TL_DCA']['tl_page']['subpalettes']['pam_choose']  = 'paSRC';
//
//$GLOBALS['TL_DCA']['tl_page']['subpalettes']['pam_root_disable'] = '';
//$GLOBALS['TL_DCA']['tl_page']['subpalettes']['pam_root_choose']  = 'paSRC,sortBy,paImgMode,paRootTimeout,paRootSpeed,paRootEnableNav,paRootNavClick,paRootNavPrevNext,paRootCenteredX,paRootCenteredY';
//
//$GLOBALS['TL_DCA']['tl_page']['subpalettes']['paOverwrite']      = 'sortBy,paImgMode,paTimeout,paSpeed';

//$GLOBALS['TL_DCA']['tl_page']['fields']['pam'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['pam'],
//    'default'                 => 'inherit',
//    'exclude'                 => true,
//    'inputType'               => 'select',
//    'options'                 => array('inherit', 'choose', 'disable'),
//    'eval'                    => array('helpwizard' => true, 'submitOnChange' => true),
//    'reference'               => &$GLOBALS['TL_LANG']['tl_page'],
//    'sql'                     => "varchar(32) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['pam_root'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['pam'],
//    'default'                 => 'inherit',
//    'exclude'                 => true,
//    'inputType'               => 'select',
//    'options'                 => array('disable', 'choose'),
//    'eval'                    => array('helpwizard' => true, 'submitOnChange' => true, 'tl_class' => 'clr m12'),
//    'reference'               => &$GLOBALS['TL_LANG']['tl_page'],
//    'sql'                     => "varchar(32) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paOverwrite'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['overwriteModule'],
//    'exclude'                 => true,
//    'inputType'               => 'checkbox',
//    'sql'                     => "char(1) NOT NULL default ''",
//    'eval'                    => array('submitOnChange' => true),
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paSRC'] = array(
//
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paSRC'],
//    'exclude'                 => true,
//    'inputType'               => 'fileTree',
//    'eval'                    => array('multiple' => true, 'fieldType' => 'checkbox', 'orderField' => 'paOrder', 'files' => true, 'mandatory' => true, 'isGallery' => true),
//    'sql'                     => "blob NULL",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paOrder'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paOrder'],
//    'sql'                     => "blob NULL",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['sortBy'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_content']['sortBy'],
//    'exclude'                 => true,
//    'inputType'               => 'select',
//    'options'                 => array('custom', 'name_asc', 'name_desc', 'date_asc', 'date_desc', 'random'),
//    'reference'               => &$GLOBALS['TL_LANG']['tl_content'],
//    'eval'                    => array('tl_class' => ''),
//    'sql'                     => "varchar(32) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paImgMode'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paImgMode'],
//    'default'                 => 'paMultiple',
//    'exclude'                 => true,
//    'inputType'               => 'select',
//    'options'                 => array('paSingle', 'paSingleRandom', 'paMultiple'),
//    'reference'               => &$GLOBALS['TL_LANG']['tl_page'],
//    'eval'                    => array('helpwizard' => true, 'chosen' => true),
//    'sql'                     => "varchar(32) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paTimeout'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paTimeout'],
//    'default'                 => 12000,
//    'exclude'                 => true,
//    'inputType'               => 'text',
//    'eval'                    => array('rgxp' => 'digit', 'tl_class' => 'w50'),
//    'sql'                     => "varchar(10) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paSpeed'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paSpeed'],
//    'default'                 => 1000,
//    'exclude'                 => true,
//    'inputType'               => 'text',
//    'eval'                    => array('rgxp' => 'digit', 'tl_class' => 'w50'),
//    'sql'                     => "varchar(10) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paRootTimeout'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paTimeout'],
//    'default'                 => 12000,
//    'exclude'                 => true,
//    'inputType'               => 'text',
//    'eval'                    => array('rgxp' => 'digit', 'tl_class' => 'w50', 'mandatory' => true),
//    'sql'                     => "varchar(10) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paRootSpeed'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paSpeed'],
//    'default'                 => 1000,
//    'exclude'                 => true,
//    'inputType'               => 'text',
//    'eval'                    => array('rgxp' => 'digit', 'tl_class' => 'w50', 'mandatory' => true),
//    'sql'                     => "varchar(10) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paRootEnableNav'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paRootEnableNav'],
//    'exclude'                 => true,
//    'inputType'               => 'checkbox',
//    'eval'                    => array('tl_class' => 'long clr'),
//    'sql'                     => "char(1) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paRootNavClick'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paRootNavClick'],
//    'exclude'                 => true,
//    'inputType'               => 'checkbox',
//    'eval'                    => array('tl_class' => 'long'),
//    'sql'                     => "char(1) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paRootNavPrevNext'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paRootNavPrevNext'],
//    'exclude'                 => true,
//    'inputType'               => 'checkbox',
//    'eval'                    => array('tl_class' => 'long'),
//    'sql'                     => "char(1) NOT NULL default ''",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paRootCenteredX'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paRootCenteredX'],
//    'exclude'                 => true,
//    'default'                 => 1,
//    'inputType'               => 'checkbox',
//    'eval'                    => array('tl_class' => 'long'),
//    'sql'                     => "char(1) NOT NULL default '1'",
//);
//
//$GLOBALS['TL_DCA']['tl_page']['fields']['paRootCenteredY'] = array(
//    'label'                   => &$GLOBALS['TL_LANG']['tl_page']['paRootCenteredY'],
//    'exclude'                 => true,
//    'default'                 => 1,
//    'inputType'               => 'checkbox',
//    'eval'                    => array('tl_class' => 'long'),
//    'sql'                     => "char(1) NOT NULL default '1'",
//);