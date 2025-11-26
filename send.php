<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom = $_POST['nom'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $adresse = $_POST['adresse'];
    $motivation = $_POST['motivation'];

    $to = "YOUR_EMAIL_HERE"; 
    $subject = "طلب انخراط جديد من الموقع";
    
    $message = "
    الاسم الكامل: $nom
    رقم الهاتف: $phone
    البريد الإلكتروني: $email
    العنوان: $adresse
    سبب الانخراط:
    $motivation
    ";

    $headers = "From: website@yourdomain.com";

    mail($to, $subject, $message, $headers);

    echo "تم إرسال طلب الانخراط بنجاح. شكراً لك!";
}
?>