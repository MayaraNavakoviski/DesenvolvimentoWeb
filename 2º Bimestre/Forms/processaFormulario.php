<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
   //  RECEBE OS DADOS DO FORMULÁRIO
   $nome = $_POST['nome'];
   $email = $_POST['email'];

   // Validação básica (opcional)
   if (empty($nome) || empty($email)) {
       echo "Todos os campos são obrigatórios!";
  
   } else {
       // PROCESSA OS DADOS
        echo "Nome: " . htmlspecialchars($nome) . "<br>";
        echo "Email: " . htmlspecialchars($email);
        header("Location: obrigado.php?nome=" .$nome ."&email= " . $email);
        exit();
   }
}
