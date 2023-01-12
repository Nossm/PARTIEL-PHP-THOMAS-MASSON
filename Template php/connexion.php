<?php
  //connexion à la base de données
  $nom = $_POST["NOM"];
  $prenom = $_POST["PRENOM"];
  $age = $_POST["AGE"];
  
  $conn = new mysqli('localhost', 'root', '', 'test1');
  if ($conn->connect_error) {
      die('Connection failed: ' . $cconn->connect_error);
  } else {
      $stmt = $conn->prepare("INSERT into inscription(NOM, PRENOM, AGE) values (?, ?, ?, ?)");
      $stmt->bind_param("ssss", $nom, $prenom, $age, $hash);
      $stmt->execute();
      echo "<script>alert('Inscription reussie'); window.location='index.php'</script>";
      $stmt->close();
      $conn->close();
  }
  
  ?>