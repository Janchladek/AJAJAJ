<?php
require_once('../scripts/connection.php');
include('../parts/header.php');

?>
<style>

  background-color: #black;



  .container {
    text-align: center;
    
  }
  h1 {
    padding-top: 50px;

  }




h1{  
    color: black;
}    
input{
    margin: 7px;}

</style>
<?php $message = isset($_GET["message"]) ? $_GET["message"] : "";?>
<main class>
  <form action="../scripts/avatar_change_script.php" method="post">
    <div class="container">
      <h1>Zmena avatara</h1>
      <body style="background-color:green;">
      <hr>
      <img src="../images/<?php  echo $avatar;?>"  style="width: 200px">
      <p><select name="avatar"style="margin-top: 30px;" class="form-select form-select-lg form-select-border-width-2" aria-label=".form-select-lg example">
     
          <option disabled selected>Vyberte avatara</option>
          <option value="a.png">User1</option>
          <option value="b.png">User2</option>
          <option value="c.png">User3</option>
        </select>
      <p><button type="submit" class="btn btn-outline-secondary">Zmenit</button>
      <p class="text-danger"><?php echo $message ?></p>
    </div>
  </form>
</main>