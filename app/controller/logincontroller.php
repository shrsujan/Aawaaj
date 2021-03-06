<?php require_once($_SERVER['DOCUMENT_ROOT']."/Aawaaj/database/session.php"); ?>

<?php
require_once($_SERVER['DOCUMENT_ROOT']."/Aawaaj/app/model/loginmodel.php");
			
			class LoginControl{
				private $username;
				private $password;
				private $firstName;

				function __construct(){
					if(isset($_POST['submit'])){
						$this->username = $_POST['username'];
						$this->password = $_POST['password'];

						$this->verifyUser();
					}
				}
				public function getUserName(){
					return $this->username;
				}
				private function verifyUser(){
					global $loginmodelobj;
					$success = $loginmodelobj->findUser($this->username,$this->password);
					if($success){
						global $session;
						//$this->firstName = $loginmodelobj->getFirstName();
						if($loginmodelobj->getUserType()=="generalUser"){
							$session->generalUserLogin($loginmodelobj->getUserId(),$loginmodelobj->getFirstName(),$loginmodelobj->getLastName(),$loginmodelobj->getUserType());
						}
						elseif ($loginmodelobj->getUserType()=="organization") {
							if($loginmodelobj->getName($this->username)){
								$session->organizationLogin($loginmodelobj->getUserId(),$loginmodelobj->getOrganizationName(),$loginmodelobj->getUserType());
						}}
						elseif ($loginmodelobj->getUserType()=="welfare") {
							if($loginmodelobj->getName($this->username)){
								$session->welfareLogin($loginmodelobj->getUserId(),$loginmodelobj->getWelfareName(),$loginmodelobj->getUserType());
						}}
						header("Location: ../../profile/index.php" );
					}else{
						//if login not successful
						echo "Redirect to login page giving some error";
					}
				}
				


			}
			$loginControl = new LoginControl();

?>