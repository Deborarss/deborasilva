<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portfolio extends CI_Controller {

	public function __construct() {
    parent::__construct();

    $this->load->library('form_validation');
  }  

	public function index($enviado=NULL) {  

    $data['enviado'] = $enviado;

    $this->load->view('template/html-head', $data);
    $this->load->view('template/main');
    $this->load->view('template/html-footer');
  }
  
  public function enviar_mensagem() {

    $this->form_validation->set_rules('nome', 'Nome', 'required');
    $this->form_validation->set_rules('email', 'E-mail', 'required|valid_email');
    $this->form_validation->set_rules('mensagem', 'Mensagem', 'required');

    if($this->form_validation->run()) {

      $nome = $this->input->post('nome');
      $email = $this->input->post('email');
      $mensagem = $this->input->post('mensagem');
      $ip = $this->input->ip_address();

      $this->load->library('email');
      $this->email->from($email, $nome);
      $this->email->to('debora_rss@hotmail.com');
      $this->email->subject('Formulário de Contato - Portfólio');
      $this->email->message(
        "
        <p><strong>Nome: </strong>$nome</p>
        <p><strong>E-mail: </strong>$email</p>
        <p><strong>Mensagem: </strong>$mensagem</p>
        <p><strong>IP Usuário: </strong>$ip</p>
        "
      );

      if($this->email->send()) {
        redirect(base_url('portfolio/1'));  // Certo
      } else {
        redirect(base_url('portfolio/2')); // Errado
      }
      

    } else {
      $this->index();
    }
  }
}
