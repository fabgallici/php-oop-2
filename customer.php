<?php
// - Definire la classe Persona caratterizzata da nome e cognome
class Persona {
  private $name;
  private $surname;
  public function __construct($name, $surname) {
      $this->name = $name;
      $this->surname = $surname;
  }
  public function __toString()
  {
    return "name: " . $this->name . " - surname: " . $this->surname;
  }
}
// - Definire la classe Ospite (che eredita da Persona) caratterizzata da nome, cognome e anno di nascita
class Ospite extends Persona {
  private $yearOfBirth;
  public function __construct($name, $surname, $yearOfBirth) {
    $this->yearOfBirth = $yearOfBirth;
    parent::__construct($name, $surname);
  }
  public function __toString() {
    return parent::__toString() . " - year of birth: " . $this->yearOfBirth;
  }
}
// - Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
class Pagante extends Persona {
  private $address;
  public function __construct($name, $surname, $address) {
    $this->address = $address;
    parent::__construct($name, $surname);
  }
  public function __toString()
  {
    return parent::__toString() . " - address: " . $this->address;
  }
}
// - Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
// - Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi
$utente1 = new Persona('Gianni', 'Rossi');
echo $utente1 . "<br>";

$utente2 = new Ospite('Alberto', 'Bianchi', 1970);
echo $utente2 . "<br>";

$utente3 = new Pagante('Pinco', 'Pallino', 'via Roma');
echo $utente3;

//return "$this->name è il mio nome, $this->surname è il mio cognome <br>";