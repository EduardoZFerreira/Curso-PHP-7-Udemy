<?php

if(!is_dir("Images"))
    mkdir("Images");

foreach (scandir("Images") as $item) {
    if(!in_array($item, array(".", "..")))
    {
        unlink("Images/" . $item);
    }
}

echo "OK";