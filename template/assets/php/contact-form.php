<?php
// Bezpečnostní opravy kontaktního formuláře

// 1. Validace a sanitizace vstupů
$name = isset($_POST['name']) ? htmlspecialchars(strip_tags(trim($_POST['name'])), ENT_QUOTES, 'UTF-8') : '';
$email = isset($_POST['email']) ? filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL) : '';
$message = isset($_POST['message']) ? htmlspecialchars(strip_tags(trim($_POST['message'])), ENT_QUOTES, 'UTF-8') : '';
$subject = isset($_POST['subject']) ? htmlspecialchars(strip_tags(trim($_POST['subject'])), ENT_QUOTES, 'UTF-8') : 'Zpráva z webu';

// 2. Validace emailu
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(400);
    echo 'Neplatný email';
    exit;
}

// 3. Ochrana proti email header injection - odstranění nebezpečných znaků
$email = preg_replace('/[\r\n]/', '', $email);
$name = preg_replace('/[\r\n]/', '', $name);
$subject = preg_replace('/[\r\n]/', '', $subject);

// 4. Kontrola délky zprávy (ochrana proti DoS)
if (strlen($message) > 10000) {
    http_response_code(400);
    echo 'Zpráva je příliš dlouhá';
    exit;
}

// 5. Kontrola povinných polí
if (empty($name) || empty($email) || empty($message)) {
    http_response_code(400);
    echo 'Vyplňte všechna povinná pole';
    exit;
}

// DŮLEŽITÉ: Změňte na váš skutečný email!
$to = 'magdalena@strategickyweb.cz';

// 6. Bezpečné sestavení emailu
$body = "Od: " . $name . "\r\n";
$body .= "E-Mail: " . $email . "\r\n";
$body .= "Zpráva:\r\n" . $message;

// 7. Bezpečné hlavičky - From používá fixní adresu serveru, Reply-To pro odpověď
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/plain; charset=utf-8' . "\r\n";
$headers .= 'From: noreply@webdesain.cz' . "\r\n";
$headers .= 'Reply-To: ' . $email . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

// 8. Odeslání emailu
$result = mail($to, "WebdesAIn: " . $subject, $body, $headers);

if ($result) {
    http_response_code(200);
    echo 'OK';
} else {
    http_response_code(500);
    echo 'Chyba při odesílání';
}
?>
