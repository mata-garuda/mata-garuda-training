<?php

interface X_ControllerModelCallback
{

    public function on_create($object);
    public function on_get($object);
    public function on_update($object);
    public function on_delete($object);

}