<?php
/**
 * A unique identifier is defined to store the options in the database and reference them from the theme.
 * By default it uses the theme name, in lowercase and without spaces, but this can be changed if needed.
 * If the identifier changes, it'll appear as if the options have been reset.
 *
 */

function optionsframework_option_name() {

    // This gets the theme name from the stylesheet (lowercase and without spaces)
    $themename = get_option('stylesheet');
    $themename = preg_replace("/\W/", "_", strtolower($themename));

    $optionsframework_settings = get_option('optionsframework');
    $optionsframework_settings['id'] = $themename;
    update_option('optionsframework', $optionsframework_settings);

    // echo $themename;
}

/**
 * Defines an array of options that will be used to generate the settings page and be saved in the database.
 * When creating the 'id' fields, make sure to use all lowercase and no spaces.
 *
 */

function optionsframework_options()
{
    $default_options = airtime_default_options();

    $options = array();

    $options[] = array(
        'name' => __("Basic Settings", 'airtime'),
        'type' => 'heading'
    );

    $options[] = array(
        'name' => __("Logo", 'airtime'),
        'desc' => __("We recommend an image that is 370px by 96px", 'airtime'),
        'id'   => 'logo',
        'type' => 'upload'
    );

    $options[] = array(
        'name' => __("Social Media Settings", 'airtime'),
        'type' => 'heading'
    );

    $options[] = array(
        'name' => __("Twitter", 'airtime'),
        'id'   => 'twitter_url',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __("Facebook", 'airtime'),
        'id'   => 'facebook_url',
        'type' => 'text'
    );

    $options[] = array(
        'name' => __("Font Settings", 'airtime'),
        'type' => 'heading'
    );

    $options[] = array(
        'name' => __("Base Font Family", 'airtime'),
        'id'   => 'base_font_family',
        'type' => 'text',
        'std'  => $default_options['base_font_family']
    );

    $options[] = array(
        'name' => __("Heading Font Family", 'airtime'),
        'id'   => 'heading_font_family',
        'type' => 'text',
        'std'  => $default_options['heading_font_family']
    );

    $options[] = array(
        'name' => __("Color Settings", 'airtime'),
        'type' => 'heading'
    );

    $options[] = array(
        'name' => __("Primary Color", 'airtime'),
        'id'   => 'primary_color',
        'type' => 'color',
        'std'  => $default_options['primary_color']
    );

    $options[] = array(
        'name' => __("Complimentary Color", 'airtime'),
        'id'   => 'complimentary_color',
        'type' => 'color',
        'std'  => $default_options['complimentary_color']
    );

    $options[] = array(
        'name' => __("Contrast Color", 'airtime'),
        'id'   => 'contrast_color',
        'type' => 'color',
        'std'  => $default_options['contrast_color']
    );

    $options[] = array(
        'name' => __("Text Color", 'airtime'),
        'id'   => 'text_color',
        'type' => 'color',
        'std'  => $default_options['text_color']
    );

    $options[] = array(
        'name' => __("Headings Color", 'airtime'),
        'id'   => 'headings_color',
        'type' => 'color',
        'std'  => $default_options['headings_color']
    );

    $options[] = array(
        'name' => __("Contrast Text Color", 'airtime'),
        'id'   => 'contrast_text_color',
        'type' => 'color',
        'std'  => $default_options['contrast_text_color']
    );

    return $options;
}
