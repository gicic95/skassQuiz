 <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "android_quiz";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error){
        die("Konekcija nije uspela:".$conn->connect_error);
    }
    $id = 0;
    $odgovor = "";
    $pitanje = ""; 
   
    
    /*METODA ZA ISCITAVANJE PARAMETRA SA ANDROIDA
    
    
    
    
        $pitanje = pitanje iz androida;
        $odgovor  = odgovor u androidu;
        $id = id pitanja iz androida;
        
        
        
        
    METODA ZA ISCITAVANJE PARAMETRA SA ANDROIDA*/


    





        if ($odgovor == "SELECT tacan_odgovor FROM pitanja WHERE id = $id")
            {
                $upisTacnihOdg = "SELECT tacanOdgovor FROM statistika WHERE id = '$id'";    
                $upisTacnihOdg++;
                $upisTacnih = "UPDATE statistika SET tacanOdgovor= $upisTacnihOdg WHERE id = '$id'";
                if ($conn->query($upisTacnih) === TRUE) {
                    echo "New record created successfully";
                }
                else {
                    echo "Error: " . $upisTacnih . "<br>" . $conn->error;
                }
            }
        else
            {
                $upisNetacnihOdg = "SELECT netacanOdgovor FROM statistika WHERE id = '$id'";    
                $upisNetacnihOdg++;
                $upisNetacnih = "UPDATE statistika SET netacanOdgovor = $upisNetacnihOdg WHERE id = $id";
                if ($conn->query($upisNetacnih) === TRUE) {
                    echo "New record created successfully";
                } 
                else {
                    echo "Error: " . $upisNetacnih . "<br>" . $conn->error;
                }
            }

$conn->close();
?>