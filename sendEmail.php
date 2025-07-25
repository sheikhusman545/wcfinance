<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
require 'PHPMailer/Exception.php';



header('Content-Type: application/json');

// Parse JSON body from POST
$data = json_decode(file_get_contents('php://input'), true);

$recaptcha_token = $data['recaptcha_token'] ?? null;
$secret_key = 'write you key here '; // from Google reCAPTCHA admin panel

// Verify reCAPTCHA with Google
$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret={$secret_key}&response={$recaptcha_token}");
$result = json_decode($response, true);

// Check success and score
if (!$result['success'] || $result['score'] < 0.5) {
    echo json_encode(['success' => false, 'message' => 'reCAPTCHA verification failed.']);
    exit;
}

// Basic required field check
if (
    empty($data['email']) || empty($data['firstName']) ||
    empty($data['lastName']) || empty($data['phone'])
) {
    echo json_encode(['success' => false, 'message' => 'Missing required lead fields.']);
    exit;
}

// Email content
$message = "
New Loan Inquiry Submission

Name: {$data['firstName']} {$data['lastName']}
Email: {$data['email']}
Phone: {$data['phone']}

City: {$data['city']}, Province: {$data['province']}
KMs: {$data['kms']}
License: {$data['license']}
Insurance: {$data['insurance']}
Collateral: {$data['collateral']}
Amount Requested: {$data['amount']}
Payments: {$data['payments']}
Vehicle Status: {$data['vehicleStatus']}
";

$mail = new PHPMailer(true);

try {
    // SMTP settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'westerncommercialfinance@gmail.com'; // Gmail username
    $mail->Password   = 'qcrz fope bsfu qmpy'; // Gmail App Password
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    // Email settings
    $mail->setFrom($data['email'], "{$data['firstName']} {$data['lastName']}");
    $mail->addAddress('apply@wcfinance.ca'); // Recipient
    $mail->addCC('gopi.s@audienta.ai'); // <-- Add CC here
//    $mail->addAddress('sheikhusman545@gmail.com');
//$mail->addAddress('someone@example.com', 'Optional Name');
    $mail->Subject = 'New Loan Inquiry Submission';
    $mail->Body    = $message;

    $mail->send();
    echo json_encode(['success' => true, 'message' => 'Email sent successfully.']);
} catch (Exception $e) {
    echo json_encode([
        'success' => false,
        'message' => "Mailer Error: {$mail->ErrorInfo}"
    ]);
}
?>
