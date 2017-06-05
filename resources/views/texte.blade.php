<?php
/**
 * PHP Contact form
 *
 * Add basic form validation: required fields & email address valid
 * Sends email to
 */
$email_to = 'lucas_skillo@hotmail.com'; // update to your email
$email_to_name = 'Lucas de Souza'; // update to your name
$form_message = '<p>Please use the form below to contact us.</p>';
$form_errors = array();
$form_values = $_POST; // Optionally change to $_GET & <form action="contact.php" method="get"> on form
$required_fields = array( // if any of these fields are blank are error will show
    'contact-name' => 'Name',
    'contact-email' => 'Email',
    'contact-message' => 'Message',
);

if (!empty($form_values)) {
    // Form was submitted, validate required fields
    if (!empty($required_fields)) {
        foreach ($required_fields as $required => $label) {
            if (empty($form_values[$required])) {
                $form_errors[$required] = "The $label field is required and cannot be left blank."; //Message to show use
            }
        }
    }

    if (!empty($form_values['contact-email'])) {
        // Email address submitted, validate it
        // Remove all illegal characters from email
        $email = filter_var($form_values['contact-email'], FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // Valid, send email
            require 'public/assets/plugins/PHPMailer/PHPMailerAutoload.php';
            $mail = new PHPMailer;
            $mail->setFrom($email, $form_values['contact-name']);
            $mail->addAddress($email_to, $email_name);
            $mail->Subject = 'Contact form enquiry from ' . $form_values['contact-name'];
            $email_body = array();
            $email_body[] = '<strong>Email:</strong> ' . $form_values['contact-email'] .'<br />';
            $email_body[] = '<strong>Name:</strong> ' . $form_values['contact-name'] .'<br />';
            $email_body[] = '<strong>Message:</strong> ' . $form_values['contact-message'] .'<br />';
            $email_body[] = 'Email sent at '. date('r', time());
            $mail->msgHTML(implode('<br />', $email_body));

            if (!$mail->send()) {
                $form_errors[] = 'Error in sendng enquiry please email us at ' . $email_to . ' instead.';
            }
            else {
                $form_message = '<div class="alert alert-success" role="alert"><strong>Enquiry Successfully sent!</strong> Thank you we will get back to you as soon as possible.</div>';
            }
        }
        else {
            // Invalid
            $form_errors['contact-email'] = 'The email address inputted is invalid.';
        }
    }

    // Make errors into message to user
    if (!empty($form_errors)) {
        $form_message = '<div class="alert alert-danger" role="alert"><strong>Error!</strong> The following errors have occurred submitting the form: <hr />' . implode('<br />', $form_errors) .'</div>';
    }
}
?>
@extends('layouts.default')

@section('content')

    @include('layouts.menu_default')

    <!-- ======== @Region: #content ======== -->
    <div id="content">
        <div class="container">
            <!--main content-->
            <div class="col-md-12">
                <h2 class="title-divider">
                    <span>Contato</span>
                    <small>Entre em contato conosco</small>
                </h2>
                <?php echo !empty($form_message) ? $form_message : ''; // Show message to user, errors or success ?>

                <!-- The form: submits to itself -->
                <form id="contact-form" action="contato.blade.php" method="POST">
                    <div class="form-group<?php echo !empty($form_errors['contact-name']) ? ' has-danger' : ''; // add danger class is error on field ?>">
                        <label class="sr-only" for="contact-name">Name</label>
                        <input type="text" value="<?php echo !empty($form_values['contact-name']) ? $form_values['contact-name'] : ''; ?>" class="form-control<?php echo !empty($form_errors['contact-name']) ? ' form-control-danger' : ''; // add danger class is error on field ?>" name="contact-name" id="contact-name" placeholder="Name">
                        <small id="contact-name-help" class="form-text text-muted">Primeiro e último nome</small>
                    </div>
                    <div class="form-group<?php echo !empty($form_errors['contact-name']) ? ' has-danger' : ''; // add danger class is error on field ?>">
                        <label class="sr-only" for="contact-name">Telefone</label>
                        <input type="text" value="<?php echo !empty($form_values['contact-name']) ? $form_values['contact-name'] : ''; ?>" class="form-control<?php echo !empty($form_errors['contact-name']) ? ' form-control-danger' : ''; // add danger class is error on field ?>" name="contact-phone" id="contact-phone" placeholder="Telefone">
                        <small id="contact-name-help" class="form-text text-muted">DDD e seu telefone.</small>
                    </div>
                    <div class="form-group<?php echo !empty($form_errors['contact-email']) ? ' has-danger' : ''; // add danger class is error on field ?>">
                        <label class="sr-only" for="contact-email">Email</label>
                        <input type="email" value="<?php echo !empty($form_values['contact-email']) ? $form_values['contact-email'] : ''; ?>" class="form-control<?php echo !empty($form_errors['contact-email']) ? ' form-control-danger' : ''; // add danger class is error on field ?>" name="contact-email" id="contact-email" placeholder="Email">
                        <small id="contact-email-help" class="form-text text-muted">Seu e-mail para entrarmos em contato</small>
                    </div>
                    <div class="form-group<?php echo !empty($form_errors['contact-message']) ? ' has-danger' : ''; // add danger class is error on field ?>">
                        <label class="sr-only" for="contact-message">Message</label>
                        <textarea rows="12" class="form-control<?php echo !empty($form_errors['contact-message']) ? ' form-control-danger' : ''; // add danger class is error on field ?>" name="contact-message" id="contact-message" placeholder="Message"><?php echo !empty($form_values['contact-message']) ? $form_values['contact-message'] : ''; ?></textarea>
                        <small id="contact-message-help" class="form-text text-muted">Detalhe seu contato.</small>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Send Message">
                </form>

            </div>
        </div>
    </div>
@stop