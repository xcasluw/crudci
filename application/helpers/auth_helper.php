<?php

function permission(){
    $ci = get_instance();
    $loggedUser = $ci->session->userdata("logged_user");
    if(!$loggedUser){
        $ci->session->set_flashdata("danger", "Voc� precisa estar logado como administrador para acessar esta p�gina!");
        redirect('login');
    }
    return $loggedUser;
}
