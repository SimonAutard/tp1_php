<div class="container">
    <div class="section">
    <p class="subtitle"> Entrez le nombre d'élèves par groupe :</p>
    <form name='form' method='get'>
        <div class = columns>
            <input id="number" class="column is-11 input is-primary" type="number" value="<?php echo isset($_GET['nb_groups']) ? $_GET['nb_groups'] : 0;?>" name='nb_groups'>
            <input class="column button is-primary" type="submit">
        </div>
    </form>

    <?php

    echo "<main>" . PHP_EOL . "<div class='columns'>" . $A_vue['student'] . "</div>" . PHP_EOL . "</main>" . PHP_EOL ;
    echo "</div>" . PHP_EOL . "</div>";