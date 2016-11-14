<?php 

// namespace Tickets;

class TicketMapper{

	private $pdo = null;
	
	function __construct($db){
		$this->pdo = $db; 
	}
	public function getArticle(){
		$sql = "SELECT user_id,username,name,profile_pic FROM users ORDER BY user_id";
		try {
			$db = $this->pdo;
			$stmt = $db->query($sql);  
			$users = $stmt->fetchAll(PDO::FETCH_OBJ);
			echo '{"users": ' . json_encode($users) . '}';
		} catch(PDOException $e) {
			echo '{"error":{"text":'. $e->getMessage() .'}}'; 
		}
	}
	// $mapper = new TicketMapper($this->db);
 //    $tickets = $mapper->getTickets();
    
 //    $mapper = new TicketMapper($this->db);
 //    $ticket = $mapper->getTicketById($ticket_id);

	// getTitle
	// getComponent
	// getShortDescription
	// getId

}



