<?php
if (class_exists('PEAR_Sniffs_Commenting_ClassCommentSniff', true) === false) {
	throw new PHP_CodeSniffer_Exception('Class PEAR_Sniffs_Commenting_ClassCommentSniff not found');
}

class Cmantix_Sniffs_Commenting_ClassCommentSniff extends PEAR_Sniffs_Commenting_ClassCommentSniff
{
	/**
	 * Tags in correct order and related info.
	 *
	 *
	 * <code>
	 * @version	v1.0
	 * @author	Hans-Frederic Fraser <hfraser@c-mantix.com>
	 * @copyright Copyright (c) 2010, Hans-Frederic Fraser
	 * @license http://www.gnu.org/licenses/gpl-3.0-standalone.html
	 * @category core
	 * @package Core
	 * @subpackage Basics
	 * @filesource
	 * </code>
	 *
	 * @var array
	 */
	protected $tags = array(
			'version'    => array(
                                        'required'       => true,
                                        'allow_multiple' => false,
                                        'order_text'     => 'precedes @author',
	),
                       'author'     => array(
                                        'required'       => true,
                                        'allow_multiple' => true,
                                        'order_text'     => 'follows @subpackage (if used) or @package',
	),
                       'copyright'  => array(
                                        'required'       => false,
                                        'allow_multiple' => true,
                                        'order_text'     => 'follows @author',
	),
                       'license'    => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @copyright (if used) or @author',
	),
						'category'   => array(
                                        'required'       => true,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @license (if used) @copyright (if used) or @author',
	),
                       'package'    => array(
                                        'required'       => true,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @category',
	),
                       'subpackage' => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @package',
	),
	/*					'example'       => array(
	 'required'       => false,
	 'allow_multiple' => true,
	 'order_text'     => 'follows @subpackage (if used) or @package',
	 ),*/
                       'link'       => array(
                                        'required'       => false,
                                        'allow_multiple' => true,
                                        'order_text'     => 'follows @example (if used) or @subpackage (if used) or @package',
	),
                       'see'        => array(
                                        'required'       => false,
                                        'allow_multiple' => true,
                                        'order_text'     => 'follows @package',
	),
                       'since'      => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @see (if used) or @link',
	),
	/*	                       'filesource' => array(
	 'required'       => false,
	 'allow_multiple' => false,
	 'order_text'     => 'follows @since (if used) or @see (if used) or @link',
	 ),*/
                       'deprecated' => array(
                                        'required'       => false,
                                        'allow_multiple' => false,
                                        'order_text'     => 'follows @filesource (if used) or @since (if used) or @see (if used) or @link',
	),
	);

}
