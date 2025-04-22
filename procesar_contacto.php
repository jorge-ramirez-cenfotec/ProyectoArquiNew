<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $correo = htmlspecialchars($_POST["correo"]);
    $asunto = htmlspecialchars($_POST["asunto"]);
    $comentario = htmlspecialchars($_POST["comentario"]);

    $archivo = fopen("mensajes.txt", "a");
    fwrite($archivo, "Nombre: $nombre\nCorreo: $correo\nAsunto: $asunto\nComentario: $comentario\n---\n");
    fclose($archivo);

    echo "Gracias por contactarnos, $nombre. Hemos recibido tu mensaje.";
}
?>