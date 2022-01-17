<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>live-coding</title>

    <!--  
     * DEFINIRE CLASSE Student:
     *      Attributi:
     *      - name
     *      - surname 
     *      - registrationNumber
     * 
     *      Metodi:
     *      - costruttore che accetta name e surname
     *      - getFullname: restituisce nome completo (nome + ' ' + cognome)
     *      - __toString: restituisce nome completo + registrationNumber 
     *          (nome + " " + cognome + ": " + registrationNumber)
     * 
     * UTILIZZO OGGETTI Studend:
     * 
     *      Generare 3 istanze della classe Student con valori in ingresso diversi 
     *      (nome e cognome);
     *      Valorizzare la variabile registrationNumber per ogni istanza
     *      Stampare i nomi completi per ogni oggetto
     *      Stampare tutti i 3 oggetti     
     * 
     *  RISULTATO ATTESO:
     * 
     *      Marco Rossi
     *      Francesca Bianchi
     *      Piero Verdi
     *      
     *      Marco Rossi: 12345
     *      Francesca Bianchi: 12346
     *      Piero Verdi: 12347
     */
    -->
    <?php
        class Student {
            public $name;
            public $surname;
            public $regNum;

            public function __construct($name, $surname)
            {
                $this -> name = $name;
                $this -> surname = $surname;
            }

            public function getFullName() {
                return $this -> name . " " . $this -> surname;
            }

            public function __toString(){
                return $this-> getFullName() . ": " . $this->regNum;
            }
        }

        $student1 = new Student("Valerio", "Massi");
        $student2 = new Student("Mario", "Bianchi");
        $student3 = new Student("Francesco", "Caponero");

        $student1 -> regNum = 12345;
        $student2 -> regNum = 12346;
        $student3 -> regNum = 12347;
    ?>
</head>
<body>
    <h1>HELLO WORLD</h1>

    <?php
        echo "Student 1: " . $student1 -> getFullName() . "<br>";
        echo "Student 2: " . $student2 -> getFullName() . "<br>";
        echo "Student 3: " . $student3 -> getFullName() . "<br>";
        echo "<br>";
        echo "Student 1: " . $student1 . "<br>";
        echo "Student 2: " . $student2 . "<br>";
        echo "Student 3: " . $student3 . "<br>";
    ?>
</body>
</html>