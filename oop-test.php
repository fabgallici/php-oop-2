<?php

    class Persona {

      private $name;
      private $lastname;

      function __construct($name, $lastname) {

        // $this -> name = $name;
        // $this -> lastname = $lastname;

        $this -> setName($name);
        $this -> setLastname($lastname);
      }

      function getName() { return $this -> name; }
      function setName($name) {

        if ($name && $name != "Francesco")
          $this -> name = $name;
        else
          echo "Tentativo di assegnare valore a \$name Fallito!!<br>";
      }

      function getLastname() { return $this -> lastname; }
      function setLastname($lastname) { $this -> lastname = $lastname; }

      function getFullname() { return $this -> getName() . " " . $this -> getLastname(); }

      function __toString() {

        return $this -> getFullname();
      }
    }
    class Ospite extends Persona {

      private $dateOfBirth;

      function __construct($name, $lastname, $dateOfBirth) {

        parent::__construct($name, $lastname);
        $this -> dateOfBirth = $dateOfBirth;
      }

      function getDateOfBirth() { return $this -> dateOfBirth; }
      function setDateOfBirth($dateOfBirth) { $this -> dateOfBirth = $dateOfBirth; }

      function __toString() {

        return parent::__toString() . " "
             . $this -> getDateOfBirth();
      }
    }
    class Pagante extends Persona {

      private $address;

      function __construct($name, $lastname, $address) {

        parent::__construct($name, $lastname);
        $this -> address = $address;
      }

      function getAddress() { return $this -> address; }
      function setAddress($address) { $this -> address = $address; }

      function __toString() {

        return parent::__toString() . " "
             . $this -> getAddress();
      }
    }

    $p1 = new Persona("Chiara", "Verder");
    $p2 = new Persona("Mario", "Rossi");

    echo "Persona 1: " . $p1 . "<br>";
    echo "Persona 2: " . $p2 . "<br>";
    echo "<br>";

    $o1 = new Ospite("Paolo", "Gialli", "2000.10.01");
    $o2 = new Ospite("Sara", "Viola", "1990.01.28");

    echo "Ospite 1: " . $o1 . "<br>";
    echo "Ospite 2: " . $o2 . "<br>";
    echo "<br>";

    $pa1 = new Pagante("Marco", "Gialli", "via Falsetto, 123");
    $pa2 = new Pagante("Federica", "Neri", "via Cavour, 10");

    echo "Pagante 1: " . $pa1 . "<br>";
    echo "Pagante 2: " . $pa2 . "<br>";
    echo "<br>";
