<?php
/**
 * Created by PhpStorm.
 * User: anusha
 * Date: 4/10/18
 * Time: 2:42 PM
 */

$options = array(
    'tab_test' => array(
        'type' => 'tab',
        'title' => __('My 1st Test', '{domain}'),
        'options' => array(
            'demo_text'   => array(
                'label'   => __('Demo text label', '{domain}'),
                'desc'    => __('Demo text description', '{domain}'),
                'help'    => __('Demo text help', '{domain}'),
                'type'    => 'text'
            ),
            'demo_select' => array(
                'label'   => __('Demo select label', '{domain}'),
                'desc'    => __('Demo select description', '{domain}'),
                'type'    => 'select',
                'choices' => array(
                    'c1'  => __('Choice 1', '{domain}'),
                    'c2'  => __('Choice 2', '{domain}'),
                    'c3'  => __('Choice 3', '{domain}')
                ),
                'value'   => 'c2'
            ),
        ),
    ),

    'tab_basic' => array(
        'type' => 'tab',
        'title' => __('Basic', '{domain}'),

        'options' => array(
            'btn_title'   => array(
                'type'  => 'text',
                'value' => '',
                'label' => __( 'Button text', '{domain}' ),
                'desc'  => __( 'Button text', '{domain}' )

            ),

            'btn_link'   => array(
                'type'  => 'text',
                'value' => 'http://',
                'label' => __( 'Button Link', '{domain}' ),
                'desc'  => __( 'Where should your Button link to', '{domain}' )

            ),

            'btn_target' => array(
                'type'  => 'switch',
                'label'   => __( 'Open Link in New Window', '{domain}' ),
                'desc'    => __( 'Select here if you want to open the linked page in a new window', '{domain}' ),
                'right-choice' => array(
                    'value' => '_blank',
                    'label' => __('Yes', '{domain}'),
                ),
                'left-choice' => array(
                    'value' => '_self',
                    'label' => __('No', '{domain}'),
                ),
            ),
            'section_popup_switch' => array(
                'label' => __('Popup Target Button', '{domain}'),
                'type'  => 'switch',
                'right-choice' => array(
                    'value' => 'true',
                    'label' => __('Enable', '{domain}')
                ),
                'left-choice' => array(
                    'value' => 'false',
                    'label' => __('Disable', '{domain}')
                ),
                'desc'    => __( 'Enable to make as a popup target button (add section id in the button link field)', 'fw' ),
            )

        )
    ),

    'tab_appearance' => array(
        'type' => 'tab',
        'title' => __('Appearance', '{domain}'),

        'options' => array(

            'btn_color'  => array(
                'label'   => __( 'Button color', '{domain}' ),
                'desc'    => __( 'Choose a color for Button', '{domain}' ),
                'type'    => 'color-picker',
                'value'   => '#000000',
                'palettes' => array( '#ffffff', '#0ff00d', '#000000' )
            ),
            'btn_txt_color'  => array(
                'label'   => __( 'Button text color', 'fw' ),
                'desc'    => __( 'Choose a text color for your Button', '{domain}' ),
                'type'    => 'color-picker',
                'value' => '#ffffff',
                'palettes' => array( '#ffffff', '#0ff00d', '#000000' )
            ),
            'btn_hover_color'  => array(
                'label'   => __( 'Button hover color', '{domain}' ),
                'desc'    => __( 'Choose a hover color for Button', '{domain}' ),
                'type'    => 'color-picker',
                'value'   => '#000000',
                'palettes' => array( '#ffffff', '#0ff00d', '#000000' )
            ),
            'btn_hover_txt_color'  => array(
                'label'   => __( 'Button text hover color', '{domain}' ),
                'desc'    => __( 'Choose a text hover color for your Button', '{domain}' ),
                'type'    => 'color-picker',
                'value' => '#ffffff',
                'palettes' => array( '#ffffff', '#0ff00d', '#000000' )
            ),
        )
    ),

    'tab_advanced' => array(
        'type' => 'tab',
        'title' => __('Advance', '{domain}'),

        'options' => array(

            'btn_cst_cls'   => array(
                'type'  => 'text',
                'value' => '',
                'label' => __( 'Custom Class', '{domain}' ),
                'desc'  => __( 'Enter custom CSS class.', '{domain}' ),
                'help' => __('when adding more than one class, use space to separate them  eg- class-1 class-2')

            ),

        )
    ),
);





