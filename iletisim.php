<?php
        echo "Adınız: ";
        echo $_REQUEST["ad"];
        echo "<br>";

        echo "Soyadınız: ";
        echo $_REQUEST["soyad"];
        echo "<br>";
      
        echo "E-mailiniz: ";
        echo $_REQUEST["email"];
        echo "<br>";

        echo "Messi-Ronaldo arasındaki seçiminiz : ";
        echo $_REQUEST["radio"];
        echo "<br>";

        echo "Tanıdığınız Ünlüler : ";        
        if(isset($_REQUEST["elon"]))
        {
            echo "Elon Musk ";
        }
        if(isset($_REQUEST["hoca"]))
        {
            echo "Abdullah Sevin ";
        }
        if(isset($_REQUEST["hawking"]))
        {
            echo "Stephen Hawking ";
        }
        if(isset($_REQUEST["hadise"]))
        {
            echo "Hadise ";
        }
        echo "<br>";

        echo "En çok sevdiğiniz mevsim : ";
        echo $_REQUEST["select"];
        echo "<br>";

        echo "Mesajınız : ";
        echo $_REQUEST["mesaj"];
        echo "<br>";
    
        echo "<br>"."<br>";
        echo '<a href="ilk.php#iletisim"> GERİ DÖN </a>';
    ?>