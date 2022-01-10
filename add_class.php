<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add Activité</h2>
    <form class="post-form" action="saveclass.php" method="post">
        <div class="form-group">
            <label>Code activites :</label>
            <input type="text" name="code_activite" required/>
        </div>
        <br>
                <div class="form-group">
            <label>Nom activites :</label>
            <input type="text" name="name_activite" required/>
        </div>
       
        
        <input class="submit" type="submit" value="Save"  />

        
		<input class="Delete" type="submit" name="deletebtn" value="Delete" />
		
		
    </form>
</div>
</div>
</body>
</html>
