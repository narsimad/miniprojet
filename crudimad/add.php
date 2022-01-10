<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>N°Ordre :</label>
            <input type="text" name="N°Ordre" required/>
        </div></br>

        <div class="form-group">
            <label>Date enregistrement :</label>
            <input type="Date" name="Enregistrement" required/>
        </div></br>
        <div class="form-group">
            <label for="DrapImage" style="font-family: sans-serif;">Drapeau :</label><br>
            <img height="100px" width="150px" src="placeholder.png" onclick="atriggerClick()"  id="DrapDisplay"/>
            <input type="file" id="DrapImage" onchange="displayDrap(this)" name="pdr" style="display: none;" required/>
            
        </div></br>
        <div class="form-group">
            <label>Adresse :</label>
            <input type="text" name="Adresse" required/>
        </div></br>
        <div class="form-group">
            <label>Ville :</label>
            <input type="text" name="Ville" required/>
        </div></br>

        <div class="form-group">
            <label>Pays :</label>
            <input type="text" name="Pays" required/>
        </div></br>

        <div class="form-group">
            <label>E-mail :</label>
            <input type="text" name="E-mail" required/>
        </div></br>

        <div class="form-group">
            <label>Nom :</label>
            <input type="text" name="Nom" required/>
        </div></br>

        <div class="form-group">
            <label>Prénom :</label><br>
            <input type="text" name="Prénom" required/>
        </div>
        <br>
        
		<div class="form-group">
            <label for="Religion">Religion:</label>
            <input type=radio name=Religion value=Musulmane>Musulmane </td>
            <input type=radio name=Religion value=Chrétienne>Chrétienne  </td>
            <input type=radio name=Religion value=Juive>Juive  </td>
            <input type=radio name=Religion value=Autres>Autres  </td>
            
        </div>
		<br>

        <div class="form-group">
            <label>Groupe Sanguin :</label>
            <input type="text" name="Groupe Sanguin" required/>
        </div>
		<br>
        <div class="form-group">
            <label for="Consommation Tabacs">Consommation Tabacs :</label>
            <input type=radio name=O value=O>O </td>
            <input type=radio name=N value=N>N  </td>
        </div>
        <br>
        <div class="form-group">
            <label>Lieu De Naissance :</label><br>
            <input type="text" name="Lieu De Naissance" required/>
        </div>
        <br>
        <div class="form-group">
            <label>Pays De Naissance :</label><br>
            <input type="text" name="Pays De Naissance" required/>
        </div>
        <br>
        <div class="form-group">
            <label>Profession :</label><br>
            <input type="text" name="Profession" required/>
        </div>
        <br>
        <div class="form-group">
            <label>Adresse profession :</label><br>
            <input type="text" name="Pays De Naissance" required/>
        </div>
        <br>
        <div class="form-group">
            <label>Ville profession :</label><br>
            <input type="text" name="Ville profession" required/>
        </div>
        <br>
        <div class="form-group">
            <label>N°Téléphone :</label><br>
            <input type="text" name="N°Téléphone" required/>
        </div>
        <br>
        <div class="form-group">
            <label>Type Arts :</label><br>
            <input type="checkbox" name="Type Arts" value="Théatre" required/>Théatre
            <input type="checkbox" name="Type Arts" value="Cinéma" required/>Cinéma
            <input type="checkbox" name="Type Arts" value="Musique Universitaire" required/>Musique Universitaire
            <input type="checkbox" name="Type Arts" value="Arts Plastique" required/>Arts Plastique
            <input type="checkbox" name="Type Arts" value="Littérature" required/>Littérature
        </div>
        <br>
        
        <br>
		 <div class="form-group">
		     <label for="Statut">Statut:</label><br>
             <input type=radio name=Statut value=marie>marie 
			 <input type=radio name=Statut value=celibataire>celibataire
			 <input type=radio name=Statut value=veuf>veuf
			 <input type=radio name=Statut value=divorce>divorce
		    		
        </div>
		<br>	
        
        <div class="form-group">
            <label>Pays Nationalité :</label><br>
            <select name="nationalité" required>
                <option value="" selected disabled>Select nationalité</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM nationalite";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['cid']; ?>"><?php echo $row['name_nat']; ?> ></option>

              <?php } ?>
            </select>
        </div>
        <br>

        <div class="form-group">
        <label for="photoImage" style="font-family: sans-serif;">Photo :</label><br>
        <img height="100px" width="150px" src="" onclick="triggerClick" id="photoDisplay"/>
        <input type="file" name="photoImage" onchange="displayImage(this)" name="pdr" style="display: none;" required/>
            
        </div></br>
        
        <div class="form-group">
        <label for="photoImage" style="font-family: sans-serif;">Vidéo :</label><br>
        <img height="100px" width="150px" src="" onclick="triggerClick" id="videoDisplay"/>
        <input type="file" name="photoImage" onchange="displayImage(this)" name="pdr" style="display: none;" required/>
            
        </div></br>
    
        
        <div class="form-group">
            <label>Résumé de la personnalité :</label><br>
            <input type="areatext" name="Résumé" required/>
        </div>
        <br>
        <div class="form-group">
            <label>Type Activités sportives :</label><br>
            <select name="sport" required>
                <option value="" selected disabled>Select Activité :</option>
                <?php
                include 'config.php';

                $sql = "SELECT * FROM activites_sportifs";
                $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

                while($row = mysqli_fetch_assoc($result)){
                ?>
                <option value="<?php echo $row['name_activites']; ?>"><?php echo $row['Nom']; ?> ></option>

              <?php } ?>
            </select>
        </div>

        <input class="submit" type="submit" value="Save" />
    </form>
</div>
</div>
<script type="scripts.js"></script>
</body>
</html>
