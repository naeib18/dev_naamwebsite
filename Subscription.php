<?php

class Subscription {
    private $conn;
    private $table_name = "aanvragen";

    // Object eigenschappen
    public $voornaam;
    public $tussenvoegsel;
    public $achternaam;
    public $straatnaam;
    public $postcode;
    public $woonplaats;
    public $telefoon;
    public $akkoord;

    public function __construct($db) {
        $this->conn = $db;
    }

    // Methode om de aanvraag op te slaan
    public function create() {
        $query = "INSERT INTO " . $this->table_name . " 
                SET voornaam=:voornaam, tussenvoegsel=:tussenvoegsel, achternaam=:achternaam, 
                    straatnaam_nummer=:straatnaam, postcode=:postcode, woonplaats=:woonplaats, 
                    telefoon=:telefoon, akkoord=:akkoord";

        $stmt = $this->conn->prepare($query);

        // Sanitize data
        $this->voornaam = htmlspecialchars(strip_tags($this->voornaam));
        $this->tussenvoegsel = htmlspecialchars(strip_tags($this->tussenvoegsel));
        $this->achternaam = htmlspecialchars(strip_tags($this->achternaam));
        $this->straatnaam = htmlspecialchars(strip_tags($this->straatnaam));
        $this->postcode = htmlspecialchars(strip_tags($this->postcode));
        $this->woonplaats = htmlspecialchars(strip_tags($this->woonplaats));
        $this->telefoon = htmlspecialchars(strip_tags($this->telefoon));
        $this->akkoord = $this->akkoord ? 1 : 0;

        // Bind parameters
        $stmt->bindParam(":voornaam", $this->voornaam);
        $stmt->bindParam(":tussenvoegsel", $this->tussenvoegsel);
        $stmt->bindParam(":achternaam", $this->achternaam);
        $stmt->bindParam(":straatnaam", $this->straatnaam);
        $stmt->bindParam(":postcode", $this->postcode);
        $stmt->bindParam(":woonplaats", $this->woonplaats);
        $stmt->bindParam(":telefoon", $this->telefoon);
        $stmt->bindParam(":akkoord", $this->akkoord);

        if($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
