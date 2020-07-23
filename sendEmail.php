<?php
    
    use PHPMailer\PHPMailer\PHPMailer;
    require_once __DIR__ . '/vendor/autoload.php';
    



        
    	
        $email = "tushar.chavan19@vit.edu";
        

        
        // using mpdf
        $mpdf = new \Mpdf\Mpdf();
        //$stylesheet = file_get_contents('letterStyle.css');
        $data=" <style type='text/css'>
        .name{
            position: absolute;
            
            height: 100px;
            left: 410px;
            top: 305px;
            text-align: center;
            font-size: 70px;
            color: #0e61e6;
            
        }
        .institute{
            position: absolute;
            
            height: 100px;
            left: 410px;
            top: 397px;
            text-align: center;
            font-size: 45px;
            color:#8ab7ff;
            
        }
        .qr{
            position: absolute;
            width: 100px;
            height: 100px;
            left: 315px;
            top: 705px;
        }
    </style>
 
 
    <div class='certificate'>
        
        <img src='2.jpg' alt='' onclick='window.print()'>
        <div>
            <p class='name'>Shivansh Rastogi</p>
            <p class='institute'>V.I.T</p>
        </div>
        <div>
            <img  class='qr' src='https://api.qrserver.com/v1/create-qr-code/?data=Shivansh&amp;size=100x100' alt='' title='' />
        </div>
    </div>
        
         ";


        //$mpdf->WriteHTML($stylesheet,1);
        $mpdf->WriteHtml($data);

        $mpdf->output("shivansh.pdf", 'F');
        
    // storing "S", the pdf in $pdf
    
?>
