<?php

// success message
function flashSuccess($msg)
{
    session()->flash('success', $msg);
}

// success message
function flashError($message = 'Something went wrong, please try again')
{
    session()->flash('error', $message);
}
