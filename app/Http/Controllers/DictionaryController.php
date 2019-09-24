<?php


namespace App\Http\Controllers;




use Illuminate\Http\Request;

class DictionaryController
{

    public function checkWord(Request $request){
        $arrayWords = ['pen'=>'bút','black'=>'màu đen ','book'=>'sách ',"cat"=>'mèo'];
        $word=$request->text;
        $result = null;
        foreach ($arrayWords as $key=>$value) {
            if ($word == $key) {
                $result = $value;
                break;
            } else {
                $result = 'Please try again with another word';
            }
        };
        return view('result', compact(['result']));

    }
}
