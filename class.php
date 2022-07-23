<!DOCTYPE html>
<html>
    <head>
        <title>Class</title>
        <meta name="description" content="php classes & objects">
    </head>
    <body>
        <?php 
            // similar to a combination of js and java
            class Anime {
                private $title;
                private $length;
                public $episodes;
                public $author;
                public $year;

                function __construct($aTitle, $aLength, $aEpisodes, $aAuthor, $aYear) {
                    $this->setTitle($aTitle);
                    $this->length = $aLength;
                    $this->episodes = $aEpisodes;
                    $this->author = $aAuthor;
                    $this->year = $aYear;
                }

                function isNew(){
                    if($this->year >= 2021) {
                        return "true";
                    }
                    return "false";
                }

                function getTitle(){
                    return $this->title;
                }

                function setTitle($aTitle){
                    if(strlen($aTitle) > 4) {
                        $this->title = $aTitle;
                    }else {
                        $this->title = "N/A";
                    }
                }

            }

            $anime1 = new Anime("Kaguya-sama: Love Is War", 25.00, 12, "Aka Akasaka", 2022);
            echo $anime1->getTitle();
            echo "<br>".$anime1->isNew();

            // inheritance similar to java
            class NewAnime extends Anime{
                function callOut(){
                    echo "Seinei!!!";
                }
            }
            
            $na = new NewAnime("Kaguya-sama: Love Is War", 25.00, 12, "Aka Akasaka", 2022);
            echo "<br>";
            $na->callOut();

        ?>
    </body>
</html>