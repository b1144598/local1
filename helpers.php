<?php


function e($str)
{
    return htmlentities($str, ENT_QUOTES, 'UTF-8', true);
}