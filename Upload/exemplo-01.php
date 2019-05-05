
<form method="POST" enctype="MULTIPART/FORM-DATA">
    <input type="file" name="fileUpload">
    <button type="Submit"> Send </button>
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $file = $_FILES["fileUpload"];
    if($file["error"])
    {
        throw new Exception("Erro: " . $file["error"]); 
    }
    $dirUpload = "Uploads";
    if(!is_dir($dirUpload))
    {
        mkdir($dirUpload);
    }

    if(move_uploaded_file($file['tmp_name'], $dirUpload . DIRECTORY_SEPARATOR . $file['name']))
    {
        echo "Upload concluído com sucesso";
    } 
    else
    {
        throw new Exception("Não foi possível completar o upload"); 
    }
}

?>