<?php
namespace Petras;
//kai dvi klases Read su tuo paciu vardu
use Ona\Read as Ona;
use Gilus\Miskas\Paupy\Abc;

// class Read extends Ona {
//     public $what = 'Petro klase Read from db';
// }

class Read extends Abc {
    public $what = 'Petro klase Read from db';
}



//kai nera toks pats klases vardas uztenka parasyt namespace (Gilus\Miskas + klases vardas Abc)
// use Gilus\Miskas\Abc;
// //is duomenu bazes

// class Read extends Abc {
//     public $what = 'Petro klase Read from db';
// }