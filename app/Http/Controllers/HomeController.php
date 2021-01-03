<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $time01 = array();
        $time02 = array();
        $time03 = array();
        $time04 = array();
        $time05 = array();
        $time06 = array();
        $time07 = array();
        $time08 = array();
        $time09 = array();
        $time10 = array();
        $time11 = array();
        $time12 = array();
        $time13 = array();
        $time14 = array();
        $time15 = array();

        $fime01 = array();
        $fime02 = array();
        $fime03 = array();
        $fime04 = array();
        $fime05 = array();

        // Data 01
        $data = fopen("schedule/PLAY_1.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
          $line = fgets($data);
          $parts = explode('|', $line);
          if ($parts[0] == "") {
            echo "";
          } else {
            array_push($time01, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
          }
          $i++;
        }
        fclose($data);

        // Data 02
        $data = fopen("schedule/PLAY_2.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
          $line = fgets($data);
          $parts = explode('|', $line);
          if ($parts[0] == "") {
            echo "";
          } else {
            array_push($time02, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
          }
          $i++;
        }
        fclose($data);

        // Data 03
        $data = fopen("schedule/PLAY_3.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($time03, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data 04
        $data = fopen("schedule/PLAY_4.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
          $line = fgets($data);
          $parts = explode('|', $line);
          if ($parts[0] == "") {
            echo "";
          } else {
            array_push($time04, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
          }
          $i++;
        }
        fclose($data);

        // Data 05
        $data = fopen("schedule/PLAY_5.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($time05, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data 06
        $data = fopen("schedule/PLAY_6.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
          $line = fgets($data);
          $parts = explode('|', $line);
          if ($parts[0] == "") {
            echo "";
          } else {
            array_push($time06, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
          }
          $i++;
        }
        fclose($data);

        // Data 07
        $data = fopen("schedule/PLAY_7.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($time07, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data 08
        $data = fopen("schedule/PLAY_8.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
          $line = fgets($data);
          $parts = explode('|', $line);
          if ($parts[0] == "") {
            echo "";
          } else {
            array_push($time08, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
          }
          $i++;
        }
        fclose($data);

        // Data 09
        $data = fopen("schedule/PLAY_9.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($time09, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data 10
        $data = fopen("schedule/PLAY_10.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
          $line = fgets($data);
          $parts = explode('|', $line);
          if ($parts[0] == "") {
            echo "";
          } else {
            array_push($time10, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
          }
          $i++;
        }
        fclose($data);

        // Data 11
        $data = fopen("schedule/PLAY_11.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($time11, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data 12
        $data = fopen("schedule/PLAY_12.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
          $line = fgets($data);
          $parts = explode('|', $line);
          if ($parts[0] == "") {
            echo "";
          } else {
            array_push($time12, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
          }
          $i++;
        }
        fclose($data);

        // Data 13
        $data = fopen("schedule/PLAY_13.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($time13, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data 14
        $data = fopen("schedule/PLAY_14.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
          $line = fgets($data);
          $parts = explode('|', $line);
          if ($parts[0] == "") {
            echo "";
          } else {
            array_push($time14, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
          }
          $i++;
        }
        fclose($data);

        // Data 15
        $data = fopen("schedule/PLAY_15.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($time15, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data Friday 01
        $data = fopen("schedule/Friday_1.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($fime01, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data Friday 02
        $data = fopen("schedule/Friday_2.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($fime02, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data Friday 03
        $data = fopen("schedule/Friday_3.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($fime03, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data Friday 04
        $data = fopen("schedule/Friday_4.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($fime04, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // Data Friday 05
        $data = fopen("schedule/Friday_5.txt", "r") or die("Unable to open file!");
        $i = 0;
        while (!feof($data)) {
            $line = fgets($data);
            $parts = explode('|', $line);
            if ($parts[0] == "") {
            echo "";
            } else {
            array_push($fime05, substr($parts[0],0,2).":".substr($parts[0],2,2).":".substr($parts[0],4,2));
            }
            $i++;
        }
        fclose($data);

        // return $time;
        return view('home', [
        'data01' => $time01, 'data02' => $time02, 'data03' => $time03, 'data04' => $time04, 'data05' => $time05, 
        'data06' => $time06, 'data07' => $time07, 'data08' => $time08, 'data09' => $time09, 'data10' => $time10, 
        'data11' => $time11, 'data12' => $time12, 'data13' => $time13, 'data14' => $time14, 'data15' => $time15, 
        'fata01' => $fime01, 'fata02' => $fime02, 'fata03' => $fime03, 'fata04' => $fime04, 'fata05' => $fime05, 
        ]);
    }


}