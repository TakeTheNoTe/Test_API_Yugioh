<html>
    <head>
    <link rel="stylesheet" type="text/css" href="CSS/showcard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <body>
            <?php
        $cari = $_POST['cari'];
$url ="https://db.ygoprodeck.com/api/v6/cardinfo.php";
    
    $json=file_get_contents($url);
    $data=json_decode($json, true);

	for ($i=0; $i < count($data); $i++){
        if ($data[$i]['name']==$cari){
            ?> 
            
                        <div class="cardinfo">
                            <img src="<?php echo $data[$i]['card_images'][0]['image_url']?>">
                        </div> 
    <div class="table-row">
            <div class="table-cell first-cell">
                <p>ID CARD</p>
            </div>
            <div class="table-cell">
                <p><?php echo $data[$i]['id']?></p>
            </div>
             
         </div>


        <div class="table-row">
            <div class="table-cell first-cell">
                <p>NAME CARD</p>
            </div>
            <div class="table-cell">
                <p><?php echo $data[$i]['name']?></p>
            </div>
            
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
                <p>TYPE CARD</p>
            </div>
            <div class="table-cell">
                <p><?php echo $data[$i]['type']?></p>
            </div>
           
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
                <p>DESCRIPTION CARD</p>
            </div>
            <div class="table-cell">
                <p><?php echo $data[$i]['desc']?></p>
            </div>
           
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
                <p>LEVEL CARD</p>
            </div>
            <div class="table-cell">
                <p><?php echo $data[$i]['level']?></p>
            </div>
            
        </div>


        <div class="table-row">
            <div class="table-cell first-cell">
                <p>RACE CARD</p>
            </div>
            <div class="table-cell">
                <p><?php echo $data[$i]['race']?></p>
            </div>
          
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
                <p>ATTRIBUTE CARD</p>
            </div>
            <div class="table-cell">
                <p><?php echo $data[$i]['attribute']?></p>
            </div>
           
        </div>

        <div class="table-row">
            <div class="table-cell first-cell">
                <p>PRICE CARD</p>
            </div>
            <div class="table-cell">
                <p><?php echo "$".$data[$i]['card_prices'][0]['ebay_price']?></p>
            </div>
           
        </div>
</div>           
        <?php
        }
    }
?> 
        </body>
    </head>
</html>

<?php
