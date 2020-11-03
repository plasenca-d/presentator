<?php
/**
 * Configuration file for 'yii message/extract' command.
 *
 * This file is automatically generated by 'yii message/config' command.
 * It contains parameters for source code messages extraction.
 * You may modify this file to suit your needs.
 *
 * You can use 'yii message/config-template' command to create
 * template configuration file with detailed description for each parameter.
 */
return [
    'color'        => true,
    'sourcePath'   => (__DIR__ . '/..'),
    'messagePath'  => (__DIR__ . '/../messages/'),
    'languages'    => ['en-US', 'bg-BG', 'de-DE', 'nl-NL', 'pt-BR', 'it-IT', 'fr-FR'],
    'translator'   => 'Yii::t',
    'sort'         => false,
    'removeUnused' => false,
    'markUnused'   => true,
    'overwrite'    => true,
    'format'       => 'php',
    'only'         => ['*.php'],
    'except'       => [
        '.svn',
        '.git',
        '.gitignore',
        '.gitkeep',
        '.hgignore',
        '.hgkeep',
        '/vendor',
        '/messages',
        '/tests',
    ],
];
