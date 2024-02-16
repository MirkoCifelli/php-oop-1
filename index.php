<?php
    class Movie{

        public $name;
        public $genre;
        public $year;

         function __construct($name, $genre, $year){
            $this->name = $name;
            $this->genre = $genre;
            $this->year = $year;
        }

        public function getName(){
            return $this->name;
        }

        public function getGenre(){
            return $this->genre;
        }

        public function getYear(){
            return $this->year;
        }
       
    }

    $movie1 = new Movie('Fast and Furios', ["Azione", " Avventura"], '2001');
    $movie2 = new Movie('2 Fast 2 Furios', 'Azione', '2003');
       

    echo $movie1->getName().' '.implode($movie1->getGenre()).' '.$movie1->getYear();
    echo ("\n");
    echo $movie2->getName().' '.$movie2->getGenre().' '.$movie2->getYear();
       
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Template PHP</title>
    </head>
    <body>

        <!-- <header>
            HEADER
        </header>

        <main>
            MAIN
        </main>

        <footer>
            FOOTER
        </footer> -->
        
    </body>
</html>