<?php

class Builder
{
    public static function createHTML()
    {
        file_put_contents("./index.html", 
        '<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>test CD</title>
        </head>
        <body>
            <img src="https://cdn.discordapp.com/attachments/955408274721734679/974216270444630036/unknown.png" alt="yay">
        </body>
        </html>'
    );
    }
}