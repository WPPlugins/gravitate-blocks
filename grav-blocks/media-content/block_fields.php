<?php

/*
*
* Gravitate Content Block
*
* Available Variables:
* $block 					= Name of Block Folder
* $block_backgrounds 		= Array for Background Options
* $block_background_image = Array for Background Image Option
*
* This file must return an array();
*
*/

$block_fields = array(
	$block_backgrounds,
	$block_background_image,
	array (
		'key' => 'field_'.$block.'_4',
		'label' => 'Image',
		'name' => 'image',
		'prefix' => '',
		'type' => 'image',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'column_width' => '',
		'return_format' => 'array',
		'preview_size' => 'medium',
		'library' => 'all',
	),
	array (
		'key' => 'field_'.$block.'_1',
		'label' => 'Image Placement',
		'name' => 'image_placement',
		'prefix' => '',
		'type' => 'radio',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'column_width' => '',
		'choices' => array (
			'left' => 'Left',
			'right' => 'Right',
		),
		'other_choice' => 0,
		'save_other_choice' => 0,
		'default_value' => '',
		'layout' => 'horizontal',
	),
	array (
		'key' => 'field_'.$block.'_2',
		'label' => 'Image Size',
		'name' => 'image_size',
		'prefix' => '',
		'type' => 'radio',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'column_width' => '',
		'choices' => GRAV_BLOCKS::column_width_options(),
		'other_choice' => 0,
		'save_other_choice' => 0,
		'default_value' => '',
		'layout' => 'horizontal',
	),
	GRAV_BLOCKS::get_link_fields( 'link', '', false ),
	array (
		'key' => 'field_'.$block.'_3',
		'label' => 'Content',
		'name' => 'content',
		'prefix' => '',
		'type' => 'wysiwyg',
		'instructions' => '',
		'required' => 0,
		'conditional_logic' => 0,
		'column_width' => '',
		'default_value' => '',
		'tabs' => 'all',
		'toolbar' => 'full',
		'media_upload' => 0,
	),
);
$sub_fields = array_merge(GRAV_BLOCKS::get_additional_fields(), $block_fields);

return array (
	'name' => $block,
	'label' => 'Media with Content',
	'display' => 'row',
	'sub_fields' => $sub_fields,
	'min' => '',
	'max' => '',
	'grav_blocks_settings' => array(
		'icon' => 'gravicon-content-media',
		'description' => '<div class="row">
				<div class="columns medium-6">
					<img src="'.plugins_url().'/gravitate-blocks/grav-blocks/media-content/media-content.svg">
					<img src="'.plugins_url().'/gravitate-blocks/grav-blocks/media-content/media-content-alt.svg">
				</div>
				<div class="columns medium-6">
					<p>When you want to have an image and then more of a description to that image, this is the block you want. The image has the ability to link to a page, URL, file or video. While the WYSIWYG allows for heading and paragraph text.</p>
					<p><strong>Available Fields:</strong></p>
					<ul>
						<li>Background</li>
						<li>Image</li>
						<li>Image Placement <em>( left or right side )</em></li>
						<li>Image Size <em>( small, medium, half width or large )</em></li>
						<li>Link Type <em>( none, page, URL, file, video )</em></li>
					</ul>
				</div>
			</div>'
	),
);
