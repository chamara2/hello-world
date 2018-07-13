<?php if (!defined('FW')) die('Forbidden');

$button_id = uniqid('base-download-button-id-');
$attachment_type = fw_akg('download/attachment_type', $atts);

if ($attachment_type == 'upload') {
    $attachmentID = fw_akg('download/upload/attachment/attachment_id', $atts);
    $attachmentURL = wp_get_attachment_url($attachmentID);
}
if ($attachment_type == 'url') {
    $attachmentURL = fw_akg('download/url/source_link', $atts);
}
echo "<pre>";
print_r($atts);echo "</pre>";
?>

<style>
    #<?php echo $button_id; ?>
    .base-button {
        color: <?php echo $atts['btn_txt_color'] ?>;
        background-color: <?php echo $atts['btn_color'] ?>;
    }
</style>
<?php
if($atts['btn_user_info'] == "yes"){
    echo "Please submit your info before download.";
}
?>
<?php if(!empty($attachmentURL)): ?>
    <div id="<?php echo $button_id; ?>" class="base-button-container">
       <i class="<?php echo $atts['icon']?>" data-value="<?php echo $atts['icon']?>"></i> <a href="<?php echo $attachmentURL; ?>" target="_blank" download
           class="base-button fw-btn <?php //echo $atts['btn_hvr_option'] ?> <?php echo $atts['btn_cst_cls'] ?>">
            <?php echo $atts['btn_title'] ?>
        </a>
    </div>
<?php endif; ?>
