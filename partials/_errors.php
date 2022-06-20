<?php
if(isset($errors)){
    if(count($errors) 
    !=0){
    echo  '<div class="alert alert-danger alert-dismissible fade show">';
        foreach($errors as $error){
            echo $error.'<br/>';
        }
    echo '</div>';
    }
}
                