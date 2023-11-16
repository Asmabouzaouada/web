
<?php
    class User
    {
        private $id;
        private $pseudo;
        private $email;
        private $password;
        private $role;
        
        public function __construct($pseudo, $email, $password){
            $this->pseudo = $pseudo;
            $this->email = $email;
            $this->password = $password;
        }

        public function getIdUser () {
            return $this->id;
        }

        public function setIdUser ($id){
            $this->id = $id;
        } 

        public function getPseudo () {
            return $this->pseudo;
        }

        public function setPseudo ($pseudo){
            $this->pseudo = $pseudo;
        }

        public function getEmail () {
            return $this->email;
        }

        public function setEmail ($email){
            $this->email = $email;
        }

        public function getPassword () {
            return $this->password;
        }

        public function setPassword  ($password){
            $this->password = $password;
        }
        
        public function getrole () {
            return $this->daterole;
        }

        public function setRole($role) {
            if ($role === 1 || $role === 2) {
                $this->role = $role;
            } else {
                throw new Exception("Le rôle doit être 1 (client) ou 2 (médecin).");
            }
        }
    }
    class Medecin extends User {
        private ?int $matricule;
        private ?int $etat;
        private ?string $adresse;
    
        public function __construct($id, $pseudo, $email, $matricule,$etat,$adresse) {
            parent::__construct($id, $pseudo, $email, 2);
            $this->matricule = $matricule;
            $this->etat = $etat;
            $this->adresse = $adresse;
        }
    
        public function getMatricule() {
            return $this->matricule;
        }
        public function getEtat() {
            return $this->etat;
        }
    
        public function getAdresse() {
            return $this->adresse;
        }
    }
?>