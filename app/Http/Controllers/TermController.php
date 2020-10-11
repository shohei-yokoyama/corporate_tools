<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TermController extends Controller
{
    public function index(Request $request){
        return view("index");
    }

    public function term_select(Request $request){
        if($request->officer_name == "director"){
            return view("director_term_select");
        } else{
            return view("auditor_term_select");
        }
    }

    public function term_check(Request $request){
        $director_term =  $request->director_term;
        $founding_date = explode("/", $request->founding_date);
        $business_year1 = $request->business_year1;
        $business_year2 = $request->business_year2;
        $asm = (int)$business_year1 + 3;
        if($asm > 12 && $asm !== 15){
            if ($asm == 13 && $asm){
                $asm = 1;
            } elseif ($asm == 14){
                $asm = 2;
            } else {
                $asm = 3;
            }
            $director_term_finish =  (int)$founding_date[0] +  $director_term + 1;
            $month = (string)$director_term_finish . "-" . (string)$asm;
            $elastDay = date("Y-m-d", strtotime("last day of" . $month));
            $lastDay = explode("-", $elastDay);    
            // $check = "次の任期満了は" . (string)$director_term_finish . "年" . (string)$asm . "月" . (string)$lastDay[2] . "日までに開催される定時株主総会終結時です。";
            $check = "年" . (string)$asm . "月" . (string)$lastDay[2] . "日までに開催される定時株主総会終結時で任期満了です。";            
            return view("check", ["check" => $check, "director_term" => $director_term, "director_term_finish" => $director_term_finish]);    
        } else {
            if($asm == 15){
                $asm = 3;
                $director_term_finish = (int)$founding_date[0] + $director_term;
                $month = (string)$director_term_finish . "-" . (string)$asm;
                $elastDay = date("Y-m-d", strtotime("last day of" . $month));
                $lastDay = explode("-", $elastDay);    
                $check = "年" . (string)$asm . "月" . (string)$lastDay[2] . "日までに開催される定時株主総会終結時で任期満了です。";            
                return view("check", ["check" => $check, "director_term" => $director_term, "director_term_finish" => $director_term_finish]);    
                }
            $director_term_finish = (int)$founding_date[0] + $director_term;
            $month = (string)$director_term_finish . "-" . (string)$asm;
            $elastDay = date("Y-m-d", strtotime("last day of" . $month));
            $lastDay = explode("-", $elastDay);    
            $check = "年" . (string)$asm . "月" . (string)$lastDay[2] . "日までに開催される定時株主総会終結時で任期満了です。";            
            return view("check", ["check" => $check, "director_term" => $director_term, "director_term_finish" => $director_term_finish]);    
        }
    }

    public function contact(Request $request){
        return view("contact");
    }

    public function privacypolicy(Request $request){
        return view("privacypolicy");
    }

    
}
