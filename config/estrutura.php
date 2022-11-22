<?php

$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "usecasepoints";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $s = "CREATE TABLE factor_technician (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    factor VARCHAR(3) NOT NULL,
    description VARCHAR(100) NOT NULL,
    weight FLOAT(2) NOT NULL
    );
    CREATE TABLE factor_environmental (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    factor VARCHAR(3) NOT NULL,
    description VARCHAR(100) NOT NULL,
    weight FLOAT(2) NOT NULL
    );";
    $conn->exec($s);


  $sql = "INSERT INTO factor_technician (factor, description, weight) VALUES ('T1', 'Sistemas Distribuídos', 2.0);
    INSERT INTO factor_technician (factor, description, weight) VALUES ('T1', 'Sistemas Distribuídos', 2.0);
    INSERT INTO factor_technician (factor, description, weight) VALUES ('T2', 'Tempo de resposta/performance', 1.0);
    INSERT INTO factor_technician (factor, description, weight) VALUES ('T3', 'Eficiência (on-line)', 1.0);
    INSERT INTO factor_technician (factor, description, weight) VALUES ('T4', 'Processamento interno complexo', 1.0);
    INSERT INTO factor_technician (factor, description, weight) VALUES ('T5', 'Código deve ser reutilizável', 1.0);
";
  $conn->exec($sql);

$sql ="INSERT INTO factor_technician (factor, description, weight) VALUES ('T6', 'Facilidade de instalação', 0.5);
INSERT INTO factor_technician (factor, description, weight) VALUES ('T7', 'Usabilidade', 0.5);
INSERT INTO factor_technician (factor, description, weight) VALUES ('T8', 'Portabilidade', 2.0);
INSERT INTO factor_technician (factor, description, weight) VALUES ('T9', 'Facilidade de Manutenção', 1.0);
INSERT INTO factor_technician (factor, description, weight) VALUES ('T10', 'Acessos simultâneos (concorrência) ', 1.0);
INSERT INTO factor_technician (factor, description, weight) VALUES ('T11', 'Aspectos especiais de segurança', 1.0);
INSERT INTO factor_technician (factor, description, weight) VALUES ('T12', 'Acesso direto para terceiros', 1.0);
INSERT INTO factor_technician (factor, description, weight) VALUES ('T13', 'Facilidades especiais de treinamento', 1.0);";

  // use exec() because no results are returned
  $conn->exec($sql);
  $sql ="INSERT INTO factor_environmental (factor, description, weight) VALUES ('F1', 'Familiaridade com a Metodologia de Gestão e Desenvolvimento', 1.5);
      INSERT INTO factor_environmental (factor, description, weight) VALUES ('F2', 'Experiência na Aplicação', 0.5);
      INSERT INTO factor_environmental (factor, description, weight) VALUES ('F3', 'Expert na Técnica de Desenvolvimento ', 1.0);
      INSERT INTO factor_environmental (factor, description, weight) VALUES ('F4', 'Experiência do Gerente de Projeto', 0.5);
      INSERT INTO factor_environmental (factor, description, weight) VALUES ('F5', 'Motivação', 1.0);
      INSERT INTO factor_environmental (factor, description, weight) VALUES ('F6', 'Requisitos estáveis ', 2.0);
      INSERT INTO factor_environmental (factor, description, weight) VALUES ('F7', 'Trabalhadores part-time ', -1.0);
      INSERT INTO factor_environmental (factor, description, weight) VALUES ('F8', 'Dificuldade da Linguagem de Programação ', -1.0);";
  $conn->exec($sql);
  echo "Banco realizado com sucesso";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

$conn = null;













 ?>
