<?php

class Movie
{
    public $id;
    public $title;
    public $originalTitle;
    public $language;
    public $price;
    public $filmLength;
    public $cover;
    public $cast;
    public $description;
    public $availability;

    public function __construct($title, $language, $price, $availability)
    {
        $this->title = $title;
        $this->price = $price;
        $this->language = $language;
        if ($availability == true) {
            $this->availability = "true";
        } else {
            $this->availability = "false";
        }
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function getId()
    {
        return $this->id;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function getTitle()
    {
        return $this->title;
    }

    public function setOriginalTitle($originalTitle)
    {
        $this->originalTitle = $originalTitle;
    }
    public function getOriginalTitle()
    {
        return $this->originalTitle;
    }

    public function setLanguage($language)
    {
        $this->language = $language;
    }
    public function getLanguage()
    {
        return $this->language;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }
    public function getPrice()
    {
        return $this->price;
    }


    public function setFilmLength($filmLength)
    {
        $this->filmLength = $filmLength;
    }
    public function getFilmLength()
    {
        return $this->filmLength;
    }


    public function setCover($cover)
    {
        $this->cover = $cover;
    }
    public function getCover()
    {
        return $this->cover;
    }


    public function setCast($cast)
    {
        $this->cast = $cast;
    }
    public function getCast()
    {
        return $this->cast;
    }


    public function setDescription($description)
    {
        $this->description = $description;
    }
    public function getDescription()
    {
        return $this->description;
    }

    public function setavailability($availability)
    {
        $this->availability = $availability;
    }
    public function getavailability()
    {
        return $this->availability;
    }
}

$movie = new Movie("Wolverine - L'immortale", "it", 19.99, true);
$movie->setOriginalTitle("The Wolverine");
$movie->setFilmLength(123);

$movie2 = new Movie("Scary Movie", "en", 5.50, true);
$movie2->setDescription("Lorem ipsum muspi meroL");

$movie3 = new Movie("Thank You for Smoking", "en", 18.90, false);
$movie3->setDescription("Film del 2005 diretto da Jason Reitman. Si tratta di una commedia narrata in prima persona dal protagonista Nick Naylor (Aaron Eckhart), un lobbista che si batte per la difesa del fumo e dei produttori di sigarette. Il film è tratto dall'omonimo romanzo di Christopher Buckley.");
$movie3->setCast("Aaron Eckhart, Maria Bello, Robert Duvall, Katie Holmes")
?>

<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($movie as $key => $value) {
            if ($value === null) {
                // Don't do anything
            } else {
                echo '<li>' . $key . ': ' . $value . '</li>';
            }
        }
        ?>
    </ul>

    <ul>
        <?php foreach ($movie2 as $key => $value) {
            if ($value === null) {
                // Don't do anything
            } else {
                echo '<li>' . $key . ': ' . $value . '</li>';
            }
        }
        ?>
    </ul>

    <ul>
        <?php foreach ($movie3 as $key => $value) {
            if ($value === null) {
                // Don't do anything
            } else {
                echo '<li>' . $key . ': ' . $value . '</li>';
            }
        }
        ?>
    </ul>
</body>

</html>