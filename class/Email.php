<?php

	/**
	 * 
	 */
	class Email{
		
		private $mailer;
		
		public function __construct($host, $username, $senha, $name){

			$this->mailer = new PHPMailer;


		    //Server settings
		    $this->mailer->isSMTP();                                            
		    $this->mailer->Host       = $host;                    				
		    $this->mailer->SMTPAuth   = true;                                   
		    $this->mailer->Username   = $username;                     			
		    $this->mailer->Password   = $senha;                              	
		    $this->mailer->SMTPSecure = 'tls';         							
		    $this->mailer->Port       = 587;                                    

		    $this->mailer->setFrom($username, $name);
		    $this->mailer->isHTML(true);                                  		
		    $this->mailer->Charset    = 'UTF-8';
			
		}

		function addAdress($email, $nome){
			$this->mailer->addAddress($email, $nome);
		}

		function formatarEmail($info){
			$this->mailer->Subject = $info['assunto'];
			$this->mailer->Body    = $info['corpo'];
			$this->mailer->AltBody = strip_tags($info['corpo']);
		}

		function enviarEmail(){
			if($this->mailer->send()){
				return true;
			}else{
				return false;
			}
		}

	}

?>