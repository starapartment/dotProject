<?php
// Entries in the LANGUAGES array are elements that describe the
// countries and language variants supported by this locale pack.
// Elements are keyed by the ISO 2 character language code in lowercase
// followed by an underscore and the 2 character country code in Uppercase.
// Each array element has 4 parts:
// 1. Directory name of locale directory
// 2. English name of language
// 3. Name of language in that language
// 4. Microsoft locale code
// v 2.01 翻譯：wlj<http://www.unnoo.com>
// 繁體化: Quentin<mailto:quentin.chung@programmer.com.hk>

$dir = basename(dirname(__FILE__));

$LANGUAGES['zh'] = array ( $dir, 'Simplified Chinese (Taiwan)', '简体中文', 'chs', 'utf-8');
?>