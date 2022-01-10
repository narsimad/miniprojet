<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add Nationalité</h2>
    <form class="post-form" action="savenat.php" method="post">
        
        <div class="form-group">
            <label>Code Nationalité :</label>
            <input type="text" name="code_nat" required/>
        </div>
        <br>
       	<div class="form-group">
            <label>Nom Nationalité :</label>
            <input type="text" name="name_nat" required/>
        </div>
        
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
