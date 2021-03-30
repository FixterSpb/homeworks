<?php

include_once  "./Bold.php";
include_once  "./HeaderH4.php";
include_once  "./HtmlRender.php";
include_once  "./IMarkdown.php";

function testDecorator(string $text){
    $htmlRender = new Bold(
        new HeaderH4(
            new HtmlRender($text)
        )
    );

    return $htmlRender->render();
}

echo testDecorator('Hello world');
