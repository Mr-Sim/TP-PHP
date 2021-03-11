<html>

    <form action="fiche.php" method=post>
        <h1>VOS COORDONNEES</h1>
        <p>Nom : <input type=text name="nom"/></p>
        <p>Prénom : <input type=text name="prenom"/></p>
        <p>Email : <input type=mail name="mail"/></p>
        <p>Etablissement : <input type=text name="eta"/></p>
        <p>Ville : <input type=text name="ville"/></p>
        <p>Date de naissance : 
            <SELECT name='JJ' >
            <?php
            for ($i=1; $i<=31; $i++)
            echo '<OPTION>'.$i.'</OPTION>';
            ?>
            </SELECT>
            <SELECT name='MM' >
            <?php
             $mois = array('janvier', 'février', 'mars', 'avril', 'mai', 'juin', 'juillet', 'aout', 'septembre', 'octobre', 'novembre', 'décembre');
            for ($i=0; $i<=11; $i++) //De l'année 1900 à l'année actuelle
            echo '<OPTION>'.$mois[$i].'</OPTION>';
            ?>
            </SELECT>
            <SELECT name='AAAA' >
            <?php
             $date = date('Y'); // On prend l'année en cours
            for ($i=1900; $i<=$date; $i++) //De l'année 1900 à l'année actuelle
            echo '<OPTION>'.$i.'</OPTION>';
            ?>
            </SELECT> </p>
        <p>Département :
            <SELECT name='dep'>
            <?php
            include 'dep.php';
            for($i=0; $i<96; $i++)
                echo'<OPTION>'.$departements[$i].'</OPTION>';
            include 'dep.php';
            for($i=970; $i<976; $i++)
                echo'<OPTION>'.$departements[$i].'</OPTION>';
            ?>
            </SELECT></p>
        <h1>Votre type d'emploi</h1>
        <p>Enseignant<input type="radio" name="emploi[]" value="enseignant"/>
        Education<input type="radio" name="emploi[]" value="éducation"/>
         Administration<input type="radio" name="emploi[]" value="administration"/></p>

        <h1>Vos loisirs</h1>
        <p>Son-vidéo<input type="checkbox" name="loisir[]" value="Son-vidéo"/>
        TV<input type="checkbox" name="loisir[]" value="TV"/></p>
        <p>Cinéma<input type="checkbox" name="loisir[]" value="Cinéma"/>
        Programmation<input type="checkbox" name="loisir[]" value="Programmation"/></p>
        <p>Sport<input type="checkbox" name="loisir[]" value="Sport"/>
        Internet<input type="checkbox" name="loisir[]" value="Internet"/></p>

        <h1>Votre projet de site web</h1>
        <textarea rows=5 cols=20 wrap="physique" name="projet"></textarea>
        <input type=submit value="ENVOYEZ">
    </form>

</html>