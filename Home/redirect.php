<?php
    if(isset($_GET['barang'])) {
        switch($_GET['barang']) {
            case 1:
                header("Location: detailBaju.html");
                break;
            case 2:
                header("Location: detailCelana.html");
                break;
            case 3:
                header("Location: detailTopi.html");
                break;
            case 4:
                header("Location: detailSepatu.html");
                break;
            case 5:
                header("Location: detailJaket.html");
                break;
            case 6:
                header("Location: detailSweter.html");
                break;
            case 7:
                header("Location: detailKemeja.html");
                break;      
        }
    }
?>