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
 * This class help to generate complete html 
 * verify if exists a template, and show it
 * put all the variables through the method assign
 * 
 * @package com.dropsizemvcf.utils.fdropsizemailer
 * @author  Isaac Trenado
 * @since   1.0.0
 */
defined('_DSEXEC') or die;

class FDMailer extends PHPMailer {

    private static $obMailer = false;
    private static $stExtras = null;
    private static $stAsunto = null;
    private static $stCuerpo = null;
    private static $stAsuntoCorto = null;
    private static $stTplDefautl = "/mailing/formato.tpl";
    private static $boDebug = 0;

    public static function init() {

        $mail = new PHPMailer();
        //Tell PHPMailer to use SMTP
        $mail->isSMTP();
        //Enable SMTP debugging
        // 0 = off (for production use)
        // 1 = client messages
        // 2 = client and server messages
        $mail->SMTPDebug = 0;
        //Ask for HTML-friendly debug output
        $mail->Debugoutput = 'html';
        //Set the hostname of the mail server
        $mail->Host = FRELAY_SMTP;
        $mail->SMTPSecure = "tls";
        //Set the SMTP port number - likely to be 25, 465 or 587
        $mail->Port = FSMTP_PORT;
        //Whether to use SMTP authentication
        $mail->SMTPAuth = true;
        $mail->Username = FSMTP_USER;
        $mail->Password = FSMTP_PASS;
        //Set who the message is to be sent from
        $mail->setFrom(FSMTP_FROM, FSMTP_FROM_NAME);

        self::$obMailer = $mail;
    }

    public static function setDebugMode($boDebug) {
        self::$obMailer->SMTPDebug = $boDebug;
    }

    public static function addDireccion($pstDireccion, $pstNombre) {
        self::$obMailer->addAddress($pstDireccion, $pstNombre);
    }

    public static function addCCarbon($pstDireccion, $pstNombre) {
        self::$obMailer->addCC($pstDireccion, $pstNombre);
    }

    public static function addAsunto($pstAsunto) {
        self::$stAsunto = $pstAsunto;
        self::$obMailer->Subject = $pstAsunto;
    }

    public static function addAsuntoCorto($pstAsuntoCorto) {
        self::$stAsuntoCorto = $pstAsuntoCorto;
    }

    public static function addCuerpo($pstCuerpo) {
        self::$stCuerpo = $pstCuerpo;
    }

    public static function addAlternativo($pstAlternativo) {
        self::$obMailer->AltBody = $pstAlternativo;
    }

    public static function addExtras($pstExtras) {
        self::$stExtras = $pstExtras;
    }

    private static function fnGetImagenEncode() {
        $path = "./images/mailing/titulo-mail.png";
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

        return $base64;
    }

    public static function enviar($boEnviar = true) {

        FDSSmarty::init();

        FDSSmarty::asignar("asunto", (is_null(self::$stAsuntoCorto) ? "" : self::$stAsuntoCorto));
        FDSSmarty::asignar("imagen", self::fnGetImagenEncode());
        FDSSmarty::asignar("cuerpo", (is_null(self::$stCuerpo) ? "" : self::$stCuerpo));
        FDSSmarty::asignar("extras", (is_null(self::$stExtras) ? "" : self::$stExtras));
        FDSSmarty::verifica_template("templates/" . self::$stTplDefautl);

        $stContenidoMail = FDSSmarty::view();

        self::$obMailer->msgHTML($stContenidoMail);

        if ($boEnviar) {

            self::$obMailer->send();

            self::$obMailer->ErrorInfo;

            return true;
        }
    }

}
