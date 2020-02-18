<?php namespace MrJohnMain\Excel\Files;

interface ExportHandler {

    /**
     * Handle the export
     * @param $file
     * @return mixed
     */
    public function handle($file);

} 