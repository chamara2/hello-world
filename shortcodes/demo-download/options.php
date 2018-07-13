<?php if (!defined('FW')) {
    die('Forbidden');
}

$options = array(
    'tab_basic' => array(
        'type' => 'tab',
        'title' => __('Basic', '{domain}'),

        'options' => array(
            'btn_title' => array(
                'type' => 'text',
                'value' => '',
                'label' => __('Button text', '{domain}'),
                'desc' => __('Button text', '{domain}')

            ),
            'download' => array(
                'type' => 'multi-picker',
                'label' => false,
                'desc' => false,
                'value' => array(
                    /**
                     * '<custom-key>' => 'default-choice'
                     */
                    'attachment_type' => 'upload',

                ),
                'picker' => array(
                    // '<custom-key>' => option
                    'attachment_type' => array(
                        'label' => __('Choose Attachment method', '{domain}'),
                        'type' => 'select', // or 'short-select'
                        'choices' => array(
                            'upload' => __('Upload', '{domain}'),
                            'url' => __('URL', '{domain}')
                        ),

                    )
                ),
                'choices' => array(
                    'upload' => array(
                        'attachment' => array(
                            'type' => 'upload',
                            'attr' => array('class' => 'custom-class', 'data-foo' => 'bar'),
                            'label' => __('Upload File', '{domain}'),
                            'images_only' => true,
                            /**
                             * An array with allowed files extensions what will filter the media library and the upload files.
                             */
                            'files_ext' => array('doc', 'pdf', 'zip'),
                            /**
                             * An array with extra mime types that is not in the default array with mime types from the javascript Plupload library.
                             * The format is: array( '<mime-type>, <ext1> <ext2> <ext2>' ).
                             * For example: you set rar format to filter, but the filter ignore it , than you must set
                             * the array with the next structure array( '.rar, rar' ) and it will solve the problem.
                             */
                            'extra_mime_types' => array('audio/x-aiff, aif aiff')
                        ),
                    ),
                    'url' => array(
                        'source_link' => array(
                            'type' => 'text',
                            'value' => 'http://',
                            'label' => __('Uploaded source URL', '{domain}'),
                            'desc' => __('Link to upload file', '{domain}')

                        )
                    ),
                ),
                /**
                 * (optional) if is true, the borders between choice options will be shown
                 */
                'show_borders' => false,
            ),
            'btn_user_info' => array(
                'type'  => 'switch',
                'label'   => __( 'Request user info', '{domain}' ),
                'desc'    => __( 'Select here if you want to user info update before download', '{domain}' ),
                'right-choice' => array(
                    'value' => 'yes',
                    'label' => __('Yes', '{domain}'),
                ),
                'left-choice' => array(
                    'value' => 'no',
                    'label' => __('No', '{domain}'),
                ),
            ),
        )
    ),

    'tab_appearance' => array(
        'type' => 'tab',
        'title' => __('Appearance', '{domain}'),

        'options' => array(

            'btn_color' => array(
                'label' => __('Button color', '{domain}'),
                'desc' => __('Choose a color for Button', '{domain}'),
                'type' => 'color-picker',
                'value' => '#000000',
                'palettes' => array('#ffffff', '#0ff00d', '#000000')
            ),
            'btn_txt_color' => array(
                'label' => __('Button text color', '{domain}'),
                'desc' => __('Choose a text color for your Button', '{domain}'),
                'type' => 'color-picker',
                'value' => '#ffffff',
                'palettes' => array('#ffffff', '#0ff00d', '#000000')
            ),
        )
    ),

    'tab_advanced' => array(
        'type' => 'tab',
        'title' => __('Advance', '{domain}'),

        'options' => array(

            'btn_cst_cls' => array(
                'type' => 'text',
                'value' => '',
                'label' => __('Custom Class', '{domain}'),
                'desc' => __('Enter custom CSS class.', '{domain}'),
                'help' => __('when adding more than one class, use space to separate them  eg- class-1 class-2')

            ),

        )
    ),
    'tab_icon' => array(
        'type' => 'tab',
        'title' => __('Icons', '{domain}'),

        'options' => array(
            array(
                'icon'    => array(
                    'type'  => 'icon',
                    'label' => __('Choose an Icon', '{domain}'),
                ),
            ),
        ),
    ),
);