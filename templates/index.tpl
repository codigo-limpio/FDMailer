<!DOCTYPE html>
<html lang="es">

    <head>
        <title>{$title}</title>
    </head>

    <body>

        <h1>Hola Mundo : {$nombre}</h1>
        <ul>
            {foreach key=key item=item from=$meses}
                <li>{$key} - {$item}</li>
                {/foreach}
        </ul>

    </body>

</html>
