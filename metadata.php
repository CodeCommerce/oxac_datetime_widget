<?php
/**
 * OXID Academy Example Module
 * Widget for demonstrating the caching feature.
 *
 * 13/1/18-15/12/10
 * v0.4
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = [
    'id'            =>  'oxac_datetime_widget',
    'title'         =>  [
        'en'        =>  '&quot;Date and time&quot; widget',
        'de'        =>  '&bdquo;Datum und Uhrzeit&rdquo;-Widget',
    ],
    'description'   =>  [
        'en'        =>  'A tiny and dynamic widget showing date and time on top of the page.',
        'de'        =>  'Dynamisches Widget, das die Uhrzeit und das Datum oben auf der Seite anzeigt.',
    ],
    'thumbnail'     =>  '',
    'version'       =>  '1.1.0',
    'author'        =>  'Johannes Ackermann',
    'url'           =>  'http://www.oxid-esales.com',
    'email'         =>  'johannes.ackermann@oxid-esales.com',
    'controllers'   =>  [
        // Controller
        'oxac_datetime_widget'      =>  \OxidAcademy\DateTimeWidgetModule\Controller\DateTimeWidget::class,
    ],
    'templates'     =>  [
        // Widget
        'oxac_datetime_widget.tpl'  =>  'oxac/oxac_datetime_widget/views/widget/oxac_datetime_widget.tpl'
    ],
    'blocks'        =>  [
        // Widget
        [
            'template'  =>  'widget/layout/header.tpl',
            'block'     =>  'layout_header_logo',
            'file'      =>  'views/blocks/oxac_datetime_header_block.tpl',
        ],
    ],
    'settings'      =>  [
        [
            'group' =>  'main',
            'name'  =>  'blDateWidgetCaching',
            'type'  =>  'bool',
            'value' =>  'false'
        ],
    ],
];
