
        <?php

            $generator = new Badcow\LoremIpsum\Generator();

            $paragraphs = $generator->getParagraphs(Input::old('paragraphs'));

            echo implode('<p>', $paragraphs);

        ?>
        
    