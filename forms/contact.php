<?php
  $nome = $_POST['nome'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $arquivo = "
    <html>
      <p><b>Nome: </b>$nome</p>
      <p><b>Nome: </b>$email</p>
      <p><b>Nome: </b>$message</p>
    </html>
  ";

  $destino = "ryann.cruz97@gmail.com";
  $assunto = "Contato pelo site";

  $headers = "MIME-Version: 1.0\n";
  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
  $headers .= "From: $nome <$email>";

  mail($destino, $assunto, $arquivo, $headers);

  echo "<meta http-equiv='refresh' content='10;URL=..index.html'>";
?>
