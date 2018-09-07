<?php
/**
 * Created by PhpStorm.
 * User: dinhpv
 * Date: 9/6/18
 * Time: 10:27 PM
 */

namespace App\Http\Controllers\Flight;


use App\Flight;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FlightController extends Controller
{
    /**
     * @param $id
     * @return mixed
     */
    public function get($id)
    {
        return Flight::findOrFail($id);
    }

    /**
     * @param Request $request
     * @return Flight
     */
    public function create(Request $request)
    {
        $flight = new Flight();

        $flight->name = $request->name;
        $flight->airline = $request->airline;
        $flight->save();

        return $flight;
    }
}