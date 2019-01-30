<?php
    class db{
        public static $conn;
		public static function open(){
			$conn = new mysqli('localhost','root','','vdb');
			$conn->set_charset('utf8');
			return $conn;
        }
        public static function close(){
            $conn.close();
        }
		public static function query($conn,$sql){
			if(!($result = $conn->query($sql)))
			{
				die('Invaild query:'.$sql);
			}
			return $result;
		}
		public static function getPostParam($conn,$key){
			return $conn->escape_string($_POST[$key]);
		}
		public static function single($conn,$sql){
			$result = self::query($conn,$sql);
			return $result->fetch_assoc();
		}
	}
?>