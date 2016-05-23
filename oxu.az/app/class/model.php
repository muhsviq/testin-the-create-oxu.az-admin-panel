<?php
class Database{
	public $server;
	public $username;
	public $password;
	public $schema;
	public $connection;

	function __construct($server,$username,$password,$schema){
		$this->server=$server;
		$this->username=$username;
		$this->password=$password;
		$this->schema=$schema;

		$this->conn_db();

	}

	public function conn_db(){

		$this->connection = new mysqli($this->server,$this->username,$this->password,$this->schema);

		// if ($this->connection->connect_error) {
		// 	die("Error:".$this->connection->connect_error);
		// }
		// else{
		// 	echo "Connected";
		// }
	}

	
}
class News extends Database{
	public $news_title;
	public $news_date;
	public $file_path;
	public $news_desc;
	public $news_full;
	public $status;
	public $connection;

	function __construct($connection){
		$this->connection=$connection;
	}
	public function insertNews($newsTitle,$newsDate,$newsDesc,$newsFull,$newsStatus){

		$sql = "INSERT INTO news (news_title,news_date,news_desc,news_full,status) VALUES ('$newsTitle','$newsDate','$newsDesc','$newsFull','$newsStatus')";
		if($this->connection->query($sql)){
				echo "Add olundu!";
			}
			else {
				echo "Error! Not added!";
			}

			$this->connection->close();

	}

}
?>