<?php
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data["whatsapp_number"]) && isset($data["whatsapp_text"])) {
    file_put_contents("config.json", json_encode($data, JSON_PRETTY_PRINT));
    echo "Nomor & Pesan WhatsApp berhasil diperbarui!";
} else {
    echo "Gagal memperbarui data!";
}
?>
