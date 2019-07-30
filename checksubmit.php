<?php
if (
  isset($_POST['q1']) && isset($_POST['q2']) && isset($_POST['q3']) && isset($_POST['q4']) && isset($_POST['q5']) &&
  isset($_POST['q6']) && isset($_POST['q7']) && isset($_POST['q8']) && isset($_POST['q9_email']) && isset($_POST['q9_telephone'])
) {

  include 'configdb.php';

  $q1 = $_POST['q1'];
  $q2 = $_POST['q2'];
  $q3 = $_POST['q3'];
  $q4 = $_POST['q4'];
  $q5 = $_POST['q5'];
  $q6 = $_POST['q6'];
  $q7 = $_POST['q7'];
  $q7_detail = $_POST['txt_area_q7_4'];
  $q8 = $_POST['q8'];
  $answer_q9_email = $_POST['q9_email'];
  $answer_q9_telephone = $_POST['q9_telephone'];

  $sql = "INSERT INTO answers (q1, q2, q3, q4, q5, q6, q7, q7_detail, q8, q9_email, q9_telephone) VALUES 
('$q1', '$q2', '$q3', '$q4', '$q5', '$q6', '$q7', '$q7_detail', '$q8', '$answer_q9_email', '$answer_q9_telephone')";
  $result = mysqli_query($conn, $sql);

  if ($result === TRUE) {
    echo ('1');
  } else {
    echo ('0');
  }
  $conn->close();
} else {
  echo ('0');
}
