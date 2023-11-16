<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$operation = 'dele';

switch ($operation) {
    case 'login':
        print "You have logged in successfully.";
        break;

    case 'logout':
        print "You have logged out. Goodbye.";
        break;

    case 'delete':
        print "here we go again!";
        break;
    case 'update':
        print "Your account has been updated.";
        break;

    default:
        print "Huh? What did you do?";
}
