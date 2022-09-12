<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Contato extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $data['title'] = 'Reserva Nature Atibaia';
        $data['description'] = 'Terrenos a partir de 360M²';
        $data['keywords'] = 'Reserva Atibaia; Terrenos Atibaia; lotes interior de sp; coworking Atibaia; lotes fernao dias';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_view';

        if ($this->input->post('enviar_email') == "enviar") {
            $nome = $this->input->post('nome');
            $email = $this->input->post('email');
            $telefone = $this->input->post('telefone');
            $mensagem = utf8_decode($this->input->post('mss'));
            $assunto = utf8_decode('[Novo Lead] LP - Reserva Nature Atibaia');

            $this->load->library('email');
            $config['mailtype'] = 'html';
            $this->email->initialize($config);

            $this->email->from("contato@reservanatureatibaia.com.br", "Reserva Nature Atibaia");
            $this->email->to('contato@reservanatureatibaia.com.br');
            $this->email->cc('mv_cp_94f_300_1828_3079_13398_73388_3535_3535_faleconosco_sitecoelhodafonseca@email.anapro.com.br, renata@spicycomm.com.br, front.baronista@gmail.com, roberta.sabeh@spicycomm.com.br');
            //$this->email->cc('front.baronista@gmail.com');

            $this->email->subject($assunto);
            $this->email->message("<html xmlns='http://www.w3.org/1999/xhtml' dir='ltr' lang='pt-br'>
            <head> <meta http-equiv='content-type' content='text/html;charset=UTF-8' /> </head><body>
            Nome:		{$nome}<br/>
                E-mail:		{$email}<br/>
                    Telefone:	{$telefone}<br/>
                        Mensagem:	{$mensagem}<br/>
                            </body></html>");
                            
            if($this->email->send()){
                redirect('contato/obrigado');
            }else{
                redirect('contato/fail');
            }
        }

        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function obrigado()
    {
        $data['title'] = 'Reserva Nature Atibaia';
        $data['description'] = 'Terrenos a partir de 360M²';
        $data['keywords'] = 'Reserva Atibaia; Terrenos Atibaia; lotes interior de sp; coworking Atibaia; lotes fernao dias';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_sucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }

    public function fail()
    {
        $data['title'] = 'Reserva Nature Atibaia';
        $data['description'] = 'Terrenos a partir de 360M²';
        $data['keywords'] = 'Reserva Atibaia; Terrenos Atibaia; lotes interior de sp; coworking Atibaia; lotes fernao dias';
        $menu['contato'] = 'active';
        $conteudo['pagina_view'] = 'contato_insucesso';
        $this->load->view('html_header', $data);
        $this->load->view('header');
        $this->load->view('menu', $menu);
        $this->load->view('conteudo', $conteudo);
        $this->load->view('rodape');
        $this->load->view('html_footer');
    }
}

/* Location: ./application/controllers/contato.php */
