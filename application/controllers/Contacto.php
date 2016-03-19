<?php

class Contacto extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('email');
		date_default_timezone_set("America/Caracas");
        setlocale(LC_TIME,"Spanish");
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Contacto - Miriam Mendoza Decoraciones y Eventos',
			'contenido' => 'principal/contacto_view',
			'description' => 'Miriam Mendoza Decoraciones y Eventos pone su disposicion una via de comunicacion rapida y efectiva, consulta cualquier duda o sugerencia que tengas y pronto seras atendido',
			'keywords' => 'agencia de festejos, agencia de festejos en caracas, alquiler de toldos, festejos el prado, miriam mendoza',
			'menu' => 'contacto'
			);
		$this->load->view('plantilla', $data);
	}

	public function enviar_email()
	{
		$nombre = $this->input->post('nombre', true);
		$email = $this->input->post('email', true);
		$asunto = $this->input->post('asunto', true);
		$msj = $this->input->post('msj', true);

		$this->email->from($email, $nombre);
		$this->email->to('festejoselprado@gmail.com', 'mcmendozac@hotmail.com');
		$this->email->subject($asunto);
		$this->email->message($msj);
		$this->email->send();
	}

	public function presupuesto()
	{
		$data = array(
			'titulo' => 'Presupuestos - Miriam Mendoza Decoraciones y Eventos',
			'contenido' => 'principal/presupuestos_view',
			'description' => 'Miriam Mendoza Decoraciones y Eventos pone a su disposicion un formulario que puede llenar facilmente, permitiendo asi reservar su proximo evento de manera rapida y efectiva',
			'keywords' => 'agencia de festejos, agencia de festejos en caracas, alquiler de toldos, festejos el prado, miriam mendoza',
			'menu' => 'contacto'
			);
		$this->load->view('plantilla', $data);
	}

	public function solicitar_presupuesto()
	{
		$nombre = $this->input->post('nombre', true);
		$email = $this->input->post('email', true);
		$tipo_evento = $this->input->post('tipo_evento', true);
		$invitados = $this->input->post('invitados', true);
		$fecha = $this->input->post('fecha', true);
		$hora = $this->input->post('hora', true);
		$lugar = $this->input->post('lugar', true);

		$mensaje = "<h2>Solicitud de Presupuesto para evento</h2>";
		$mensaje .= "<br><h3>Datos del solicitante</h3>";
		$mensaje .= "<br><strong>Nombres y Apellidos: </strong>".$nombre;
		$mensaje .= "<br><strong>Correo Electronico: </strong>".$email;
		$mensaje .= "<br><h3>Datos del Evento</h3>";
		$mensaje .= "<br><strong>Tipo de Evento: </strong>".$tipo_evento;
		$mensaje .= "<br><strong>Numero de Invitados: </strong>".$invitados;
		$mensaje .= "<br><strong>Fecha del Evento: </strong>".date("d/m/Y", strtotime($fecha));
		$mensaje .= "<br><strong>Hora del Evento: </strong>".date("h:i A", strtotime($hora));
		$mensaje .= "<br><strong>Lugar del Evento: </strong>".$lugar;
		$mensaje .= "<br>";
		$mensaje .= "<br>";
		$mensaje .= "<br>";

		$config['mailtype'] = "html";

		$this->email->initialize($config);

		$this->email->from($email, $nombre);
		$this->email->to('festejoselprado@gmail.com', 'mcmendozac@hotmail.com');
		$this->email->subject("Solicitud de Presupuesto");
		$this->email->message($mensaje);
		$this->email->send();
	}
}

?>