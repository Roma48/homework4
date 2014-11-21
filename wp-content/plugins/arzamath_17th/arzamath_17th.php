<?php
/*
Plugin Name: Arzamath_17th
Plugin URI: https://github.com/Roma48/homework4
Description: A simple wordpress plugin template
Version: 1.0
Author: Paliy Roman
License: GPL2
*/
/*
Copyright 2014  Paliy Roman  (email : myzfann@mail.ru)

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License, version 2, as
published by the Free Software Foundation.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.


*/

if ( !class_exists('Arzamath'))
    {

    class Arzamath
    {

        Public function __construct()
        {

        }

        Public static function Activate()
        {



        }

        Public static function deactivate()
        {

        }

        Public function admin_init()
        {

        }




    }

}

if ( !class_exists('Arzamath'))
{
    register_activation_hook(__FILE__, array('Arzamath'), 'activate');
    register_deactivation_hook(__FILE__, array('Arzamath'), 'deactivate');

    $arzamath = new Arzamath();
}