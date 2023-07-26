<?php 
 
	class Reservation {
 
		static protected $db;
 
		// the columns in our Reservations table
		public $id;
		public $first_name;
		public $last_name;
		public $phone_number;
		public $email;
		public $party_size;
		public $reservation_date;
		public $reservation_time;
		public $special_request;
 
		// Since $db is protected, we add a static public method
		// so that it can be called from outside the class
		static public function set_db($db) {
			self::$db = $db;
		}

		// Constructor is called whenever a new instance of the Reservation class is created
		// $args = an array of values that is passed to the constructor function
		public function __construct($args) {
			$this->id = $args['id'] ?? NULL;
			$this->first_name = mysqli_escape_string(self::$db, $args['first_name']) ?? NULL;
			$this->last_name = mysqli_escape_string(self::$db, $args['last_name']) ?? NULL;
			$this->phone_number = $args['phone_number'] ?? NULL;
			$this->email = mysqli_escape_string(self::$db, $args['email']) ?? NULL;
			$this->party_size = $args['party_size'] ?? NULL;
			$this->reservation_date = $args['reservation_date'] ?? NULL;
			$this->reservation_time = $args['reservation_time'] ?? NULL;
			$this->special_request = mysqli_escape_string(self::$db, $args['special_request']) ?? NULL;
        }

		// Method that creates a new record in the Reservations table of our database
		public function create() {
            $sql = "INSERT INTO Reservations (first_name, last_name, phone_number, email, party_size, reservation_date, reservation_time, special_request)";
            $sql .= " VALUES ( 
                '{$this->first_name}',
                '{$this->last_name}',
                '{$this->phone_number}', 
                '{$this->email}', 
                '{$this->party_size}', 
                '{$this->reservation_date}', 
                '{$this->reservation_time}', 
                '{$this->special_request}' 
            )";
            
            $result = self::$db->query($sql);
            return $result;
        }

		// Display the latest reservation on confirmation page
		static public function display_reso() {
			// Select the latest entry in the Reservations table
			$sql = "SELECT * FROM Reservations WHERE id=(SELECT max(id) FROM Reservations) LIMIT 1;";
			// Run the query above on the db connection
			$result = self::$db->query($sql);
			// Return the result of the query
			return $result;
		}
		
		// Retrieve a record from our Reservations table
		static public function find($id) {
			$sql = "SELECT * FROM Reservations WHERE id='{$id}'";
			$result = self::$db->query($sql);
			return $result->fetch_assoc();
		}


		/*------- For Updating and Deleting Reservations -------*/

		// // Updates a single record in the Reservations table of our database
		// public function update() {
		// 	$sql = "UPDATE Reservations SET ";
		// 	$sql .= "first_name='{$this->first_name}', ";
		// 	$sql .= "last_name='{$this->last_name}', ";
		// 	$sql .= "phone_number='{$this->phone_number}', ";
		// 	$sql .= "email='{$this->email}', ";
		// 	$sql .= "party_size='{$this->party_size}', ";
		// 	$sql .= "reservation_date='{$this->reservation_date}', ";
		// 	$sql .= "reservation_time='{$this->reservation_time}', ";
		// 	$sql .= "special_request='{$this->special_request}', ";
		// 	$sql .= "WHERE id='{$this->id}' ";
		// 	$sql .= "LIMIT 1";
		// 	$result = self::$db->query($sql);
		// 	return $result;
		// }

		// // Method that deletes a single record from the Reservations table of our database
		// public function delete() {
		// 	$sql = "DELETE FROM Reservations ";
		// 	$sql .= "WHERE id='{$this->id}' ";
		// 	$sql .= "LIMIT 1";
		// 	$result = self::$db->query($sql); 
		// 	return $result;
		// }		
 
	}               
 