<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';

header('Content-Type: application/json');

// Decode JSON input
$data = json_decode(file_get_contents('php://input'), true);

// reCAPTCHA Validation
$recaptcha_token = $data['recaptcha_token'] ?? null;
$secret_key = '6Lf3AWgrAAAAAMn_Kwn3_pyJeBshopN72cUu6FMI'; // from Google reCAPTCHA admin panel

$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_token}");
$result = json_decode($response, true);

if (!$result['success'] || $result['score'] < 0.5) {
    echo json_encode(['success' => false, 'message' => 'reCAPTCHA verification failed.']);
    exit;
}

// Check required fields
if (empty($data['first_name']) || empty($data['last_name']) || empty($data['email']) || empty($data['phone']) || empty($data['message'])) {
    echo json_encode(['success' => false, 'message' => 'All fields are required.']);
    exit;
}

// Compose email message
$message = "
New Contact Form Submission

Name: {$data['first_name']} {$data['last_name']}
Email: {$data['email']}
Phone: {$data['phone']}

Message:
{$data['message']}
";

$mail = new PHPMailer(true);

try {
    // SMTP Config
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'westerncommercialfinance@gmail.com'; // your Gmail
    $mail->Password   = 'qcrz fope bsfu qmpy'; // App password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Email Settings
    $mail->setFrom($data['email'], $data['first_name'] . ' ' . $data['last_name']);
    $mail->addAddress('sheikhusman545@gmail.com'); // Main recipient
    $mail->addAddress('apply@wcfinance.ca'); // Main recipient
    $mail->addCC('gopi.s@audienta.ai'); // Optional CC
    $mail->Subject = 'Contact Form Submission';
    $mail->Body    = $message;

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Your message has been sent successfully.']);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => "Mailer Error: {$mail->ErrorInfo}"
    ]);
}
