<?php
// - Definire la classe Persona caratterizzata da nome e cognome
class Persona {
  public $name;
  public $surname;
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
// - Definire la classe Pagante (che eredita da Persona) caratterizzata da nome, cognome e indirizzo (di residenza)
// - Per ogni classe definire costruttore e toString in maniera appropriata, eventualmente richiamando i metodi della classe padre
// - Eseguire dei test, istanziando ogni classe definita e testando la correttezza dei risultati attesi
$utente1 = new Persona('Gianni', 'Rossi');
echo $utente1;