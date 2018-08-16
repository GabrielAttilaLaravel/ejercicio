<?php

function currentUser()
{
    return auth()->user();
}

function currentRole()
{
    return (auth()->user()->role->nombreR === 'admin') ? 'admin_' : false;
}