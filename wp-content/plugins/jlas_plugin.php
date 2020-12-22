<?php
/**   
Plugin Name: jlas form plugin
*/
function jlas_form_plugin()
{
    $content = '';
    $content = '<form method="post" action="http://localhost/GETECH/index.php/thank-you/" />';
    $content .= '<h2>Contact Us!<h2>';

    $content .= '<label for="your_name">Name</label>';
    $content .= '<input type="text" name="your_name" class="form-control" placeholder="Enter your name" />';
   
    $content .= '<label for="your_email">Email</label>';
    $content .= '<input type="text" name="your_email" class="form-control" placeholder="Enter your email" />';

    $content .= '<label for="your_comments">Questions or Comments</label>';
    $content .= '<textarea  name="your_comments" class="form-control" placeholder="Enter your comments or questions" ></textarea>';

    $content .= '<br/><input type="submit" name="jlas_form_submit" class="btn btn-md btn-primary" value="SEND YOUR INFORMATION" />';
    $content .= '</form>';

    return $content;
}
add_shortcode('jlas_form' , 'jlas_form_plugin');

function jlas_form_capture()
{
    if (isset($_POST['jlas_form_submit'])) 
    {
        $name = sanitize_text_field( $_POST['your_name']);
        $email = sanitize_text_field( $_POST['your_email']);
        $comments = sanitize_textarea_field( $_POST['your_comments']);

        $to = 'sagnajudith@gmail.com';
        $subject = 'Test form submission';
        $message = ''.$name.' - '.$email.' - '.$comments;

        wp_mail($to,$subject,$message);
    }
}
add_action('wp_head', 'jlas_form_capture');

?>