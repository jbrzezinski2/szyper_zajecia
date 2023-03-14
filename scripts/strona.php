<?php
        $firstName = "Janusz";
        $lastName = "Janusz";
        echo "Imię i nazwisko: $firstName $lastName<br>";
        echo 'Imię i nazwisko: $firstName $lastName<br>';

        //heredoc
        echo <<< DATA
        Imię: $firstName<br>
        Nazwisko: $lastName
        
        <hr>
    DATA;


        $data = <<< DATA
        Imię: $firstName<br>
        Nazwisko: $lastName
        
        <hr>
    DATA;
        echo $data;
        //nondoc
        echo <<< 'DATA'
        Imię: $firstName<br>
        Nazwisko: $lastName
        
        <hr>
    DATA;
        