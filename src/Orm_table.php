<?php

namespace MarianDobre\SagOrm;

/**
 * SAG ORM (objet relationnel mapping)
 * @author Yoann VANITOU
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/maltyxx/sag-orm
 * @version 3.2.11 (20141218)
 */
class Orm_table extends Orm {

    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

}

/* End of file Orm_table.php */
/* Location: ./application/libraries/Orm_table.php */
