<?php
class account{
	protected:
		$id = 0;
		$name = "";
	public:
		function __construct($name, $password, $id = 0){
			if($id!=0){
				//TODO load from DB
			}else{
				//TODO insert into DB
			}
		}
}
?>
