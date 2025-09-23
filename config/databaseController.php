public function getConnection(){
$this->connection = null;
try{
            $this->connection = new mysqli("localhost", "root", "", "db");
            $this->connection = new mysqli("localhost", "root", '', "db");

if($this->connection->connect_error){
die("Connection failed: " . $this->connection->connect_error);