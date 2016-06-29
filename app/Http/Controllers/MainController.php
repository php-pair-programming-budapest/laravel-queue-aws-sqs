<?php
/**
 * @author David Namenyi <dnamenyi@gmail.com>
 * Date: 2016.06.29.
 */

namespace App\Http\Controllers;

use App\Jobs\CreateDummyFile;

class MainController extends Controller {

    public function queue()
    {
        $this->dispatch(new CreateDummyFile('hello world'));
        return 'queued';
    }

}