<?php namespace MrJohnMain\Excel\Files;

interface ImportHandler {

    /**
     * Handle the import
     * @param $file
     * @return mixed
     */
    public function handle($file);

} 