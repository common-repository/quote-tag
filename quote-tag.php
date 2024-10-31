<?php
/**
 * Plugin Name: Quote Tag
 * Plugin URI: http://www.codecanyon.net/user/WPShowCase/portfolio?ref=WPShowCase
 * Description: This plugin is to encourage semantically correct html that displays quotations between &lt;q&gt; tags as quotes - italic text within quotation marks.
 * Version: 1.0
 * Author: Premium plugins
 * Author URI: http://www.codecanyon.net/user/WPShowCase/portfolio?ref=WPShowCase
 *
 * This plugin displays short quotations as quotes. For example, <q>Believe you can and you're
 * halfway there</q> is displayed as "<i>Believe you can and you're halfway there</i>" in italics.
 *
 * @package QuoteTag
 * @version 0.0.0
 * @author Wordpress Themes Shop <admin@wpshowcase.net>
 * @copyright Copyright (c) 2013, Wordpress Themes Shop
 * @link http://www.codecanyon.net/user/WPShowCase/portfolio?ref=WPShowCase
 * @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
 */

 
/*Replace <q> with "<cite> */
function changeQuoteAndCiteTags($content) {
    $content = str_replace("<q>","\"<cite>",$content);
    $content = str_replace("</q>","</cite>\"",$content);
    return $content;
}

add_filter('the_content', 'changeQuoteAndCiteTags');
?>