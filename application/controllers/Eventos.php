<?php

class Eventos extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data = array(
			'titulo' => 'Eventos - Miriam Mendoza Decoraciones y Eventos',
			'contenido' => 'principal/eventos_view',
			'description' => 'Miriam Mendoza Decoraciones y Eventos junto con Festejos el prado cuentan con la capacidad para atender toda clase de eventos tales como aniversarios o cumpleaños, babyshowers, bodas, comuniones, graduaciones, 15 años, etc. Cuentan con años de experiencia en la materia.',
			'keywords' => 'agencias de festejos en caracas, decoración para baby shower, decoración para cumpleaños, decoración fiestas infantiles, festejos el prado',
			'menu' => 'eventos'
			);
		$this->load->view('plantilla', $data);
	}
}

?>