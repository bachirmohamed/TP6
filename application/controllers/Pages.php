<?php

class pages extends CI_Controller {
public function view($page = 'home')
{
//Condition pour vérifier que le fichier existe
if (!file_exists(APPPATH.'/views/pages/'.$page.'.php'))
{
show_404(); //Erreur 404
}
//Mettre la première lettre du titre en majuscule
$data['title'] = ucfirst($page);
//Chargement de la vue
$this->load->view('templates/header', $data);
$this->load->view('pages/'.$page, $data);
$this->load->view('templates/footer', $data);
}
}