<?php
/*************************************************************************************
 * gherkin.php
 * --------
 * Author: Frank Ralf (Frank.Ralf@gmx.net)
 * Copyright: (c) 2014 Frank Ralf
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
    'COMMENT_SINGLE' => array(),
    'COMMENT_MULTI' => array(),
    //Keys
    'COMMENT_REGEXP' => array( // ENTRY ZERO  SHOULD CHECK FOR (\n(\s*)([^#%]+?):(\s+)(!!(\w+)(\s+))?) AS A LOOKBEHIND, BUT IT CAN'T.
        0 => '/(?<=\s[\|>]\n)(\s+)(.*)((?=[\n$])(([\n^](\1(.*)|(?=[\n$])))*)|$)/', // Pipe blocks and > blocks.
        1 => '/#(.*)/', // Blue # comments
        2 => '/%(.*)/', // Red % comments
        3 => '/(^|\n)([^#%^\n]+?)(?=: )/',  // Key-value names
        4 => '/(^|\n)([^#%^\n]+?)(?=:\n)/',// Key-group names
        5 => '/(?<=^---)(\s*)!(\S+)/',    // Comments after ---
        6 => '/(?<=: )(\s*)\&(\S+)/',    // References
        7 => '/(?<=: )(\s*)\*(\S+)/',   // Dereferences
        8 => '/!!(\w+)/',              // Types
        //9 => '/(?<=\n)(\s*)-(?!-)/',       // List items: This needs to search within comments 3 and 4, but I don't know how.
        ),
    'CASE_KEYWORDS' => GESHI_CAPS_NO_CHANGE,
    'QUOTEMARKS' => array('"'),
    'ESCAPE_CHAR' => '',
    'KEYWORDS' => array(
        1 => array('Feature'),
        2 => array('Given', 'When', 'Then'),
        3 => array('Scenario', 'Outline', 'Template'),
        4 => array('And', 'But'),
        5 => array('Background'),
        6 => array('Examples', 'Scenarios'),
        ),
    'SYMBOLS' => array(
        1 => array('---', '...'),
        2 => array(': ', ">\n", "|\n", '<<:', ":\n") // It'd be nice if I could specify that the colon must
        //                                              follow comment 3 or 4 to be considered, and the > and |
        //                                              must follow such a colon.
        ),
    'CASE_SENSITIVE' => array(
        GESHI_COMMENTS => false,
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
        ),
    'STYLES' => array(
        'KEYWORDS' => array(
            1 => 'font-weight: bold;',
            2 => 'font-weight: bold;',
            3 => 'font-weight: bold;',
            4 => 'font-weight: bold;',
            5 => 'font-weight: bold;',
            6 => 'font-weight: bold;',
            ),            
        'COMMENTS' => array(
            0 => 'color: #303050;background-color: #F5F5F5',
            1 => 'color: blue;',
            2 => 'font-weight: bold; color: red;',
            3 => 'color: green;',
            4 => 'color: #007F45;',
            5 => 'color: #7f7fFF;',
            6 => 'color: #FF7000;',
            7 => 'color: #FF45C0;',
            8 => 'font-weight: bold; color: #005F5F;',
            //9 => 'font-weight: bold; color: #000000;',
            ),
        'ESCAPE_CHAR' => array(
            ),
        'BRACKETS' => array(
            ),
        'STRINGS' => array(
            0 => 'color: #CF00CF;'
            ),
        'NUMBERS' => array(
            0 => 'color: #33f;' // Don't highlight numbers, really...
            ),
        'METHODS' => array(
            1 => '',
            2 => '',
            ),
        'SYMBOLS' => array(
            1 => 'color: cyan;',
            2 => 'font-weight: bold; color: brown;',
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