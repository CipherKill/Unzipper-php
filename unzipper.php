<?php
if($_POST['files']){
    $zipController=new ZipArchive;
    
    $destination='.';   //edit here to change destination
    $filename=$_POST['files'];
    
    if($zipController->open($filename)===TRUE){
        try{
            $zipController->extractTo($destination);
        }catch(Exception $e){echo '<h3 class="failed">Could not extract file!</h3>';}
        
        $zipController->close();
        echo '<h3 class="success">Unzipped Successfully!</h3>';
    }
    else{
        echo '<h3 class="failed">Zip file could not be found!</h3>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Project Unzipper</title>

    <style>
        .success{
            color:white;
            background-color:green;
            padding:2rem;
            font-size:1.5rem;
            border-radius:10px;
        }
        .failed{
            color:white;
            background-color:red;
            padding:2rem;
            font-size:1.5rem;
            border-radius:10px;
        }
    </style>

</head>
<body>
    <h1>Unzipper V0.1 by CipherKill</h1>
    <form action="unzipper.php" method="post">
        <label for="files">Select the file to unzip: </label>
        <select name="files" id="files">
        <?php
            $foundFiles=scandir('.');
            foreach($foundFiles as $file){
                if(str_contains($file,'.zip')){
                    ?>
                        <option value=<?php echo $file ?>><?php echo $file ?></option>
                    <?php 
                }
            }
            ?>
        </select>
        <input type='submit' value='Unzip' id='unzip-btn'>
    </form>


</body>
</html>

