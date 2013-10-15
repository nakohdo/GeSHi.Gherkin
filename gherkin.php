<?php
/*************************************************************************************
 * gherkin.php
 * --------
 * Author: Frank Ralf (Frank.Ralf@gmx.net)
 * Copyright: (c) 2013 Frank Ralf
 * Release Version: 1.0.0.0
 * Date Started: 2013/10/14
 *
 * Gherkin language file for GeSHi.
 *
 * - This file is based on yaml.php by Josh Ventura (JoshV10@gmail.com).
 * - Gherkin documentation can be found at:
 *     - https://github.com/cucumber/cucumber/wiki/Gherkin
 *     - http://docs.behat.org/guides/1.gherkin.html
 *
 *************************************************************************************
 *
 *     This file is part of GeSHi.
 *
 *   GeSHi is free software; you can redistribute it and/or modify it
 *   under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 *   GeSHi is distributed in the hope that it will be useful,
 *   but WITHOUT ANY WARRANTY; without even the implied warranty of
 *   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *   GNU General Public License for more details.
 *
 *   You should have received a copy of the GNU General Public License
 *   along with GeSHi; if not, write to the Free Software
 *   Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
 *
 ************************************************************************************/

$language_data = array (
    'LANG_NAME' => 'Gherkin',
    'COMMENT_SINGLE' => array(1 => '//', 2 => '#'),
    'COMMENT_MULTI' => array(),
    //Keys
    'COMMENT_REGEXP' => array( // ENTRY ZERO  SHOULD CHECK FOR (\n(\s*)([^#%]+?):(\s+)(!!(\w+)(\s+))?) AS A LOOKBEHIND, BUT IT CAN'T.
        0 => '/(?<=\s[\|>]\n)(\s+)(.*)((?=[\n$])(([\n^](\1(.*)|(?=[\n$])))*)|$)/', // Pipe blocks and > blocks.
        1 => '/#(.*)/', // Grey # comments
        #2 => '/%(.*)/', // Red % comments
        #3 => '/(^|\n)([^#%^\n]+?)(?=: )/',  // Key-value names
        #4 => '/(^|\n)([^#%^\n]+?)(?=:\n)/',// Key-group names
        #5 => '/(?<=^---)(\s*)!(\S+)/',    // Comments after ---
        #6 => '/(?<=: )(\s*)\&(\S+)/',    // References
        #7 => '/(?<=: )(\s*)\*(\S+)/',   // Dereferences
        #8 => '/!!(\w+)/',              // Types
        //9 => '/(?<=\n)(\s*)-(?!-)/',       // List items: This needs to search within comments 3 and 4, but I don't know how.
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"', '&lt;', '&gt'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array('Feature:', 'Business Need:', 'Ability:'),
        2 => array('Given', 'When', 'Then'),
        3 => array('Scenario:', 'Scenario Outline:', 'Scenario Template:'),
        4 => array('And', 'But'),
        5 => array('Background:'),
        6 => array('Examples:', 'Scenarios:'),
        ),
    'SYMBOLS' => array(
        1 => array('@'),
        2 => array(': '), 
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => true,
        2 => true,
        3 => true,
        4 => true,
        5 => true,
        6 => true,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'color:#FF0080; font-weight: bold;',
            2 => 'color:#008000; font-weight: bold;',
            3 => 'color:#0000FF; font-weight: bold;',
            4 => 'color:#008000; font-weight: normal;',
            5 => 'color:#FF8000; font-weight: bold;',
            6 => 'color:#0000A0; font-weight: bold;',
            ),
        'COMMENTS' => array(
            0 => 'color: #808080;background-color: #F5F5F5',
            1 => 'color: #808080; font-style:italic',
            2 => 'font-weight: bold; color: red;',
            3 => 'color: green;',
            4 => 'color: #007F45;',
            5 => 'color: #7f7fFF;',
            6 => 'color: #FF7000;',
            7 => 'color: #FF45C0;',
            8 => 'font-weight: bold; color: #005F5F;',            
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            ),
        'STRINGS' => array(
            0 => 'color: #0080C0;',
            1 => 'color: lime;',
            2 => 'color: red;',
            ),
        'NUMBERS' => array(
            0 => 'color: #33f;' // Don't highlight numbers, really...
            ),
        'METHODS' => array(
            1 => '',
            2 => '',
            ),
        'SYMBOLS' => array(
            1 => 'color: magenta;',
            2 => 'font-weight: normal; color: black;',
            ),
        'REGEXPS' => array(
            ),
        'SCRIPT' => array(
            ),
        ),
    'URLS' => array(1 => ''),
    'OOLANG' => false,
    'OBJECT_SPLITTERS' => array( ),
    'REGEXPS' => array( ),
    'STRICT_MODE_APPLIES' => GESHI_NEVER,
    'SCRIPT_DELIMITERS' => array( ),
    'HIGHLIGHT_STRICT_BLOCK' => array( ),
);

?>