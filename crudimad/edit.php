<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'config.php';

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="sname" value="<?php echo $row['sname']; ?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $row['saddress']; ?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
            $sql1 = "SELECT * FROM studentclass";
            $result1 = mysqli_query($conn, $sql1) or die("Query Unsuccessful.");

            if(mysqli_num_rows($result1) > 0)  {
              echo '<select name="sclass">';
              while($row1 = mysqli_fetch_assoc($result1)){
                if($row['sclass'] == $row1['cid']){
                  $select = "selected";
                }else{
                  $select = "";
                }
                echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
              }
          echo "</select>";
        }
            ?>
      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $row['sphone']; ?>"/>
      </div>
	  
	    <div class="form-group">
		<input type="radio" name="ssexe"
		<?php if (isset($row['ssexe']) && $row['ssexe']=="masculin") echo "checked";?>
		value="masculin">masculin
	    <input type="radio" name="ssexe"
		<?php if (isset($row['ssexe']) && $row['ssexe']=="feminin") echo "checked";?>
		value="feminin">feminin
		
	     </div>
	   <div class="form-group">
		<input type="radio" name="sstatut"
		<?php if (isset($row['sstatut']) && $row['sstatut']=="marie") echo "checked";?>
		value="marie">marie
	    <input type="radio" name="sstatut"
		<?php if (isset($row['sstatut']) && $row['sstatut']=="celibataire") echo "checked";?>
		value="celibatiare">celibataire
		<input type="radio" name="sstatut"
		<?php if (isset($row['sstatut']) && $row['sstatut']=="veuf") echo "checked";?>
		value="veuf">veuf
	    <input type="radio" name="sstatut"
		<?php if (isset($row['sstatut']) && $row['sstatut']=="divorce") echo "checked";?>
		value="divorce">divorce
	     </div>
	   <div class="form-group">
		 <input type=checkbox name="typ_permis1" 
		 <?php if (isset($row['typ_permis1']) && $row['typ_permis1']=="on") echo "checked";?>
		 value="on">Permis A
		  <input type=checkbox name="typ_permis2" 
		 <?php if (isset($row['typ_permis2']) && $row['typ_permis2']=="on") echo "checked";?>
		 value="on">Permis B
		 
		  <input type=checkbox name="typ_permis3" 
		 <?php if (isset($row['typ_permis3']) && $row['typ_permis3']=="on") echo "checked";?>
		 value="on">Permis C
		 
		 
		 
		  </div>
	  
	  
	  
	  
	  
	  
	  
	  
	  
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
