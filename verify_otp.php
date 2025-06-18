<?php
session_start();
$data = json_decode(file_get_contents("php://input"), true);
$enteredOtp = $data['otp'];

if ($_SESSION['signup_otp'] == $enteredOtp) {
    echo json_encode(["valid" => true]);
    unset($_SESSION['signup_otp']); // OTP used, clear it
} else {
    echo json_encode(["valid" => false]);
}
