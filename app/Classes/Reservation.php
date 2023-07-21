<?php 
 
	class Reservation {
 
		static protected $db;
 
		// the columns in our Reservations table
		public $id;
		public $first_name;
		public $last_name;
		public $phone_number;
		public $party_size;
		public $reservation_date;
		public $reservation_time;
		public $special_request;
 
		// Since $db is protected, we add a static public method
		// so that it can be called from outside the class
		static public function set_db($db) {
			self::$db = $db;
		}

		// Returns a results object that we can loop through
		static public function find_all() {
			// Select all entries from the Reservations table
			$sql = "SELECT * FROM Reservations";
			// Run the query above on the db connection
			$result = self::$db->query($sql);
			// Return the result of the query
			return $result;
		}

		// Constructor is called whenever a new instance of the Reservation class is created
		// $args = an array of values that is passed to the constructor function
		public function __construct($args) {
			$this->id = $args['id'] ?? NULL;
			$this->first_name = $args['first_name'] ?? NULL;
			$this->last_name = $args['last_name'] ?? NULL;
			$this->phone_number = $args['phone_number'] ?? NULL;
			$this->party_size = $args['party_size'] ?? NULL;
			$this->reservation_date = $args['reservation_date'] ?? NULL;
			$this->reservation_time = $args['reservation_time'] ?? NULL;
			$this->special_request = $args['special_request'] ?? NULL;
        }

		// Method that creates a new record in the Notes table of our database
		public function create() {
            $sql = "INSERT INTO Reservations (first_name, last_name, phone_number, party_size, reservation_date, reservation_time, special_request)";
            $sql .= " VALUES ( 
                '{$this->first_name}',
                '{$this->last_name}',
                '{$this->phone_number}', 
                '{$this->party_size}', 
                '{$this->reservation_date}', 
                '{$this->reservation_time}', 
                '{$this->special_request}', 
            )";
            
            $result = self::$db->query($sql);
            return $result;
        }
 
	}               
 