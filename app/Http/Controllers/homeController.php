<?php

namespace App\Http\Controllers;

use App\Puzzle\Solver5 as solver;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Puzzle\board2 as board;
//use App\Puzzle\solver;

class homeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        return view('home');
    }

    public function processPuzzle()
    {

//        dd($_POST);
        $checkStart = $this->checkBoard($_POST['start']);
//        dd($checkStart);
        $checkGoal = $this->checkBoard($_POST['goal']);
        if($checkStart && $checkGoal) {
            $startTiles = $_POST['start'];
            $goalTiles = $_POST['goal'];

            set_time_limit(3600);
            echo '<div style="width: 100%">';
            $start = new board(
                $startTiles['A1'],
                $startTiles['A2'],
                $startTiles['A3'],
                $startTiles['B1'],
                $startTiles['B2'],
                $startTiles['B3'],
                $startTiles['C1'],
                $startTiles['C2'],
                $startTiles['C3'],
                null,
                null,
                null,
                'start'
            );
            $goal = new board(
                $goalTiles['A1'],
                $goalTiles['A2'],
                $goalTiles['A3'],
                $goalTiles['B1'],
                $goalTiles['B2'],
                $goalTiles['B3'],
                $goalTiles['C1'],
                $goalTiles['C2'],
                $goalTiles['C3'],
                null,
                null,
                null,
                'goal');
//        $goal = new board(1,2,3,8,'b',4,7,6,5,null,null,null,'goal');
//            dd($start, $goal);
            $solv = new solver($start, $goal,1);
            $solv->solvePuzzle();

            echo '</div>';
        }else {
            return view('home')->withErrors(['failed' => 'Ada yang salah dengan input data', ]);
        }
    }

    public function checkBoard($array){
        //checking same value
        $save = true;
        foreach(array_count_values($array) as $val=>$c){
            if($c > 1){
                $save = false;
            }
        }
        return $save;
    }

    public function arrayHtml($array, $heading){
        foreach($array as $key=>$value){
            echo $heading . ' : <br />';
            echo 'First Level : ' . $key . '<br';

            if(is_array($value)){
                foreach($value as $k => $va){
                    echo '[' . $k . '] => ' . $va;

                }
            }
        }

    }
}
