<?php

// @todo test @see

// should be valid

function valid(array $var = array()) { }
function valid(array $var =      []) { }
function valid(array &$var = array()) { }
function valid(array &$var =      []) { }
function valid($var = array()) { }
function valid($var =      []) { }
function valid(&$var = array()) { }
function valid(&$var =      []) { }

// should be invalid

function invalid(array &$var =      ()) { }
function invalid(array &$var = array[]) { }
function invalid(array &$var = foobr[]) { }
function invalid(array $var =      ()) { }
function invalid(array $var = array[]) { }
function invalid(array $var = foobr[]) { }

// @todo bug should be invalid

function invalid($var = array[]) { }
function invalid($var = foobr[]) { }
function invalid(&$var = array[]) { }
function invalid(&$var = foobr[]) { }
