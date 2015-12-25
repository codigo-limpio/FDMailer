<?php

/**
 * DropsizeMVCf - extension of the SlimFramework and others tools
 *
 * @author      Isaac Trenado <isaac.trenado@codigolimpio.com>
 * @copyright   2013 Isaac Trenado
 * @link        http://dropsize.codigolimpio.com
 * @license     http://dropsize.codigolimpio.com/license.txt
 * @version     3.0.1
 * @package     DropsizeMVCf
 *
 * DropsizeMVCf - Web publishing software
 * Copyright 2015 by the contributors
 * 
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
 * 
 * This program incorporates work covered by the following copyright and
 * permission notices:
 * 
 * DropsizeMVCf is (c) 2013, 2015 
 * Isaac Trenado - isaac.trenado@codigolimpio.com -
 * http://www.codigolimpio.com
 * 
 * Wherever third party code has been used, credit has been given in the code's comments.
 *
 * DropsizeMVCf is released under the GPL
 * 
 */
/**
 * DFMailer
 * 
 * @package com.dropsizemvcf
 * @author  Isaac Trenado
 * @since   1.0.0
 */
/*
 * Example use Smarty With DropsizeMVCf
 * 
 * Para usar esta clase, es necesario tener instalado Dropsize MVCf Smarty
 * Para usar esta clase, es necesario tener instalado Dropsize MVCf FDMailer
 * 
 */

define('_DSEXEC', 1);

define('FTITLE', 'DropSize MVCf | Codigolimpio.com');
define('FRELAY_SMTP', 'smtp.gmail.com');
define('FSMTP_PORT', '587');
define('FSMTP_USER', 'super.chinazo@gmail.com'); // Cuenta de gmail
define('FSMTP_PASS', 'qwe.90LA#'); // Contraseña de gmail
define('FSMTP_FROM', 'super.chinazo@gmail.com'); // Cuenta de gmail 
define('FSMTP_FROM_NAME', 'Super Chinazo Poderoso'); // Nombre registrado en Gmail

include "phpmail/PHPMailerAutoload.php";
include "Smarty/libs/Smarty.class.php";
include "FDSSmarty.php";
include "FDMailer.php";

FDMailer::init();
FDMailer::setDebugMode(1);

$mensaje = "La solicitud se realiz&oacute; con &eacute;xito"; // Mensaje alternativo tooltip
$asunto = "Notificaci\xF3n para recupera contrase\xF1a"; // Asunto
$codigohtml = 'Favor de ingresar el siguiente c&oacute;digo ' // Cuerpo
        . '<b>XXX00000XXXX</b><br /><br />Para mayor '
        . 'informaci&oacute;n comun&iacute;cate con tu administrativo.';

FDMailer::addDireccion("tibeli99@hotmail.com", "Isaac Trenado");
FDMailer::addAsunto($asunto); // Asunto
FDMailer::addAsuntoCorto("IMPORTANTE"); //Asunto corto
FDMailer::addCuerpo($codigohtml);
FDMailer::addExtras("Contenido Extra Informativo"); // Extras
FDMailer::addAlternativo($mensaje);

FDMailer::enviar();
