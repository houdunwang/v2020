<?php
function sum(): void
{
}
try{
    echo sum();
}catch (\Throwable $th){
    echo $th->getMessage();
}
