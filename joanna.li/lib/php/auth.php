<?

function makeAuth(){   //mysqli
	return[
          "localhost",
          "DreamProduct",
          "Dandan@911208",
          "dreamproducts"
	];
  
}

function makePDOAuth(){   //mysqlpdo
	return[
       "mysql:host=localhost;dbname=dreamproducts",
       "DreamProduct",
       "Dandan@911208",
       [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"]
	];
}

?>