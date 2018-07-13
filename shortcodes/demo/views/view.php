<?php if (!defined ( 'FW' ))
    die( 'Forbidden' );

$button_id = uniqid ( 'base-button-id-' );
?>

<style>

    #<?php echo $button_id; ?>    .base-button {
        color: <?php echo $atts['btn_txt_color'] ?>;
        background-color: <?php echo $atts['btn_color'] ?>;
    }

    #<?php echo $button_id; ?>    .base-button:hover {
        color: <?php echo $atts['btn_hover_txt_color'] ?>;
        background-color: <?php echo $atts['btn_hover_color'] ?>;
    }
</style>
<div class="presstigers-offers">
    <div class="container">
        <?php
        if (isset( $atts['demo_text'] ) && !empty( $atts['demo_text'] )) {
            echo '<h2>' . esc_attr ( $atts['demo_text'] ) . '</h2>';
        }
        ?>

        <?php
        if (isset( $atts['demo_select'] ) && !empty( $atts['demo_select'] )) {
            echo '<h3>' . esc_attr ( $atts['demo_select'] ) . '</h3>';
        }
        ?>

    </div>
</div>

<?php $popup_target_switch = $atts['section_popup_switch']; ?>

<?php if ($popup_target_switch == 'true') { ?>
    <div id="<?php echo $button_id; ?>" class="base-button-container">
        <a data-toggle="modal" data-target="<?php echo esc_attr ( $atts['btn_link'] ) ?>"
           class="base-button fw-btn <?php echo $atts['btn_cst_cls'] ?>" style="">
            <?php echo $atts['btn_title'] ?>
        </a>
    </div>
<?php } else { ?>

    <div id="<?php echo $button_id; ?>" class="base-button-container">
        <a href="<?php echo $atts['btn_link'] ?>" target="<?php echo $atts['btn_target'] ?>"
           class="base-button fw-btn <?php //echo $atts['btn_hvr_option'] ?> <?php echo $atts['btn_cst_cls'] ?>">
            <?php echo $atts['btn_title'] ?>
        </a>
    </div>
<?php } ?>



