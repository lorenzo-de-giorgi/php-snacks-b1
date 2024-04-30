<?php
    //! SNACK 1
    /*
        *Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. 
        *Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
        *Olimpia Milano - Cantù | 55-60
    */

    $matches = [
        [
            "squadra_casa" => "Los Angeles Lakers",
            "squadra_ospite" => "Golden State Warriors",
            "punti_casa" => 110,
            "punti_ospite" => 105
        ],
        [
            "squadra_casa" => "Brooklyn Nets",
            "squadra_ospite" => "Boston Celtics",
            "punti_casa" => 118,
            "punti_ospite" => 112
        ],
        [
            "squadra_casa" => "Chicago Bulls",
            "squadra_ospite" => "Miami Heat",
            "punti_casa" => 98,
            "punti_ospite" => 95
        ]
    ];

    //! SNACK 2
    /*
        *Con un form passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
        *che mail contenga un punto e una chiocciola e che age sia un numero. 
        *Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato”
    */

    //! SNACK 3
    /*
        *Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
        *Stampare ogni data con i relativi post.
        *Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z
    */

    $posts = [

        '10/01/2019' => [
            [
                'title' => 'Post 1',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 1'
            ],
            [
                'title' => 'Post 2',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 2'
            ],
        ],
        '10/02/2019' => [
            [
                'title' => 'Post 3',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 3'
            ]
        ],
        '15/05/2019' => [
            [
                'title' => 'Post 4',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 4'
            ],
            [
                'title' => 'Post 5',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 5'
            ],
            [
                'title' => 'Post 6',
                'author' => 'Michele Papagni',
                'text' => 'Testo post 6'
            ]
        ],
    ];

    //! SNACK 4
    /*
        *Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta
    */    

    $rndNums = [];

    while (count($rndNums) < 15) {
        do {
            $rndNum = rand(0, 100);
        } while (in_array($rndNum, $rndNums));
        $rndNums[] = $rndNum;
    }

    //! SNACK 5
    /*
        *Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.
    */
    $paragraph = "La tecnologia ha trasformato radicalmente la nostra vita quotidiana. Grazie alla connettività globale, siamo in grado di comunicare istantaneamente con persone in tutto il mondo.";

    $small_paragraph = explode('.', $paragraph);

    //! SNACK 6
    /*
        *Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
    */

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    //! SNACK 7
    /*
        *Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
        *Stampare Nome, Cognome e la media dei voti di ogni alunno.
    */

    $students = [
        [
            "name" => "Mario",
            "surname" => "Rossi",
            "marks" => [8, 7, 6, 8, 9]
        ],
        [
            "name" => "Giulia",
            "surname" => "Verdi",
            "marks" => [7, 8, 9, 6, 8]
        ],
        [
            "name" => "Luca",
            "surname" => "Bianchi",
            "marks" => [9, 8, 7, 8, 9]
        ]
    ];

    function mediaVoti($marks){
        $total = array_sum($marks);
        $total_marks = count($marks);
        return $total / $total_marks;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css">
    <title>PHP Snack</title>
</head>
<body>
    <div class="container">
        <!-- SNACK 1 -->
        <h3>Snack 1</h3>
        <?php
            foreach($matches as $match){
                echo $match["squadra_casa"] . " - " . $match["squadra_ospite"] . " | " . $match["punti_casa"] . " - " . $match["punti_ospite"] . "<br>";
            }
        ?>
        <!-- SNACK 2 -->
        <h3>Snack 2</h3>
        <form action="index.php" method="GET">
            <input type="text" name="nome" placeholder="Name">
            <input type="text" name="email" placeholder="Mail">
            <input type="text" name="age" placeholder="Age">
            <button type="submit">Invia</button>
        </form>
        <?php
            if (empty($_GET['nome'])) {
                echo 'Riempi tutti gli input!';
            } else {
                $nome = $_GET['nome'];
                $email = $_GET['email'];
                $age = $_GET['age'];
                if(strlen($nome) > 3 && str_contains($email, "@")&& str_contains($email, ".") && is_numeric($age)){
                    echo 'Ciao ' . $nome. ' ' . 'Accesso eseguito con la seguente mail: ' . $email;
                } else {
                    echo 'Accesso Negato';
                }
            }
        ?>
        <!-- SNACK 3 -->
        <h3>Snack 3</h3>
        <?php
            foreach($posts as $data => $array){
                echo "<b>Data: " . $data . "</b><br>";
                foreach($array as $post){
                    echo "Titolo: " . $post['title'] . "<br>" . "Autore: " . $post['author'] . "<br>" . "Testo: " . $post['text'] . "<br>";
                }
            }
        ?>
        <!-- SNACK 4 -->
        <h3>Snack 4</h3>
        <p>I 15 numeri sono:</p>
        <?php for ($i = 0; $i < count($rndNums); $i++) { ?>
            <?php echo $rndNums[$i] . ',' ?>
        <?php } ?>

        <!-- SNACK 5 -->
        <h3>Snack 5</h3>
        <?php
            foreach($small_paragraph as $frase){
                echo $frase . "<br>";
            }
        ?>
        <!-- SNACK 6 -->
        <h3>Snack 6</h3>
        <div class="gray">
            <h3>Teachers</h3>
            <?php
                foreach ($db["teachers"] as $teacher) {
                    echo $teacher['name'] . ' ' . $teacher['lastname'] . '<br>';
                }
            ?>
        </div>
        <div class="green">
            <h3>PM</h3>
            <?php
                foreach ($db["pm"] as $p) {
                    echo $p['name'] . ' ' . $p['lastname'] . '<br>';
                }
            ?>
        </div>
        <!-- SNACK 7 -->
        <h3>Snack 7</h3>
        <?php
            foreach($students as $student){
                $marks_average = mediaVoti($student['marks']);
                echo "Nome: " . $student['name'] . ' ' . "Cognome: " . $student['surname'] . ' ' . "Media Voti: " . $marks_average . "<br>";
            }
        ?>
    </div>
</body>
</html>