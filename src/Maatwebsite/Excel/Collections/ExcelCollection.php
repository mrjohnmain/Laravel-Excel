<?php namespace MrJohnMain\Excel\Collections;

use Illuminate\Support\Collection;

/**
 *
 * LaravelExcel ExcelCollection
 *
 * @category   Laravel Excel
 * @version    1.0.0
 * @package    mrjohnmain/excel
 * @copyright  Copyright (c) 2013 - 2014 MrJohnMain (http://www.mrjohnmain.nl)
 * @author     MrJohnMain <info@mrjohnmain.nl>
 * @license    http://www.gnu.org/licenses/old-licenses/lgpl-2.1.txt    LGPL
 */
class ExcelCollection extends Collection {

    /**
     * Sheet title
     * @var [type]
     */
    protected $title;

    /**
     * Get the title
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the title
     * @param $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
}