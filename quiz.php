    <?php

    class Cat {
        public function __construct($name, $breed)
        {
            this->$name = $name;
            this->$breed  = $breed;
        }
    }

    $milo = new Cat('Milo','Orange Tabby Cat');
    var_dump($milo);
    ?>