<?php

namespace App\Http\Controllers;

use App\Report;
use Illuminate\Http\Request;

class directoryController extends Controller
{
    public function index()
    {
        $test=[];
        $reports =APIController::reportList();
        foreach ($reports as $report)
            $test[] = $this->convertObjectClass($report,Report::class);

        //todo convert stdClass object
//        return view('directory/home')->with($reports);
    }
    function convertObjectClass($object, $final_class) {
        return unserialize(sprintf(
            'O:%d:"%s"%s',
            strlen($final_class),
            $final_class,
            strstr(strstr(serialize($object), '"'), ':')
        ));
    }
}
