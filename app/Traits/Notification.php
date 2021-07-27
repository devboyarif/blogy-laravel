<?php

namespace App\Traits;

trait Notification
{
    // Success Notification
    protected function notifySuccess($msg = 'Successfully Done!')
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'success',  'message' => $msg]
        );
    }

    // Error Notification
    protected function notifyError($msg = 'Something Went Wrong!')
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'error',  'message' => $msg]
        );
    }

    // Error Notification
    protected function notifyInfo($msg = 'Something Awesome Happend!')
    {
        $this->dispatchBrowserEvent(
            'alert',
            ['type' => 'info',  'message' => $msg]
        );
    }
}
