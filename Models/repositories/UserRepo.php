    <?php 

    require_once __DIR__ . '/../../Database/Database.php';
    require_once __DIR__ . './../classes/User.php';

    class UserRepo {


        private $conn;
        public function __construct()
        {
        $this->conn = Database::getConnection();
        }

    public function insertUser(User $user) {
            $query = "INSERT INTO users (first_name , last_name , email , password , role ) VALUES(:first_name , :last_name , :email , :password , :role )";
            $stmt = $this->conn->prepare($query);
               return $stmt->execute([
                ":first_name" => $user->getFirstName(),
                ":last_name" => $user->getLastName(),
                ":email" => $user->getEmail(),
                ":password" => $user->getPassword(),
                ":role" => $user->getRole()
            ]);
        }
    }