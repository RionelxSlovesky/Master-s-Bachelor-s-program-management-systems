<?php

    include('config.php');

    $v1 = doubleval($_GET['lat']);
    $v2 = doubleval($_GET['long']);

    $sql ="SELECT id,university, ( 1.60934 * (3959 * acos( cos( radians($v1) ) * cos( radians( lat ) ) * cos( radians( lng ) - radians($v2) ) + sin( radians($v1) ) * sin( radians( lat ) ) ) ) ) AS distance FROM universities HAVING distance < 25 ORDER BY distance LIMIT 0 , 20";

    $query = $dbh -> prepare($sql);
    $query -> execute();
    $results = $query -> fetchALL(PDO::FETCH_OBJ);

    if($query->rowCount() > 0 ){
        foreach ($results as $result){

?>

<html>
    <head>

    </head>
    <body>

            <table>
                <tr>
                    <th>University</th>
                    <th>Distance in KM</th>
                </tr>
                <tr>
                    <td><?php echo htmlentities($result->university); ?></td>
                    <td><?php echo htmlentities($result->distance); ?></td>
                </tr>
            </table>
        
    </body>
</html>

<?php

        }
    }
    
    
    






?>