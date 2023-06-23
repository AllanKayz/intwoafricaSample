<?php


namespace Allankayz\Intwoafrica;

class Login {

    /**
     * PDO object
     * @var \PDO
     */
    private $pdo;

    /**
     * init the object with a \PDO object
     * @param type $pdo
     */
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    /**
     * Find User by username
     * @param string $username
     * @return a user object
     */
    public function findByUsername($username)
    {    
        
        // prepare SELECT statement
        $stmt = $this->pdo->prepare('SELECT username, password FROM users WHERE username = :username');
        // bind value to the :id parameter
        $stmt->bindValue(':username', $username);
        
        // execute the statement
        $stmt->execute();
 
        // return the result set as an object
        return $stmt->fetch();

    }
}

?>
