<?php

namespace App\Http\Controllers;


use App\Http\Requests\Message;
use App\Models\Sponsors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;

class FrontendController extends BaseController
{

    public function index(){

        $model2=new Sponsors();

        $this->data['sponsors']=$model2->getSponsors();




        return view("pages.index",$this->data);
    }

    public function about(){

        return view("pages.about",$this->data);
    }


    public function contact(){

        return view("pages.contact",$this->data);
    }
    public function author(){

        return view("pages.author",$this->data);
    }
    public function error(){

        return view("pages.error",$this->data);
    }

    public function storeMessage(Message $request){

        $firstName=$request->get("fName");
        $lastName=$request->get("lName");
        $email=$request->get("email");
        $subject=$request->get("subject");
        $message=$request->get("message");

        $message=implode(" ",$message);

        $model= new \App\Models\Message();
        try{
            $rez=$model->insertMessage($firstName,$lastName,$email,$subject,$message);
            $data = array(
                'message' => $message,
                'email' => $email
            );
            //Mail::to("mikipn99@gmail.com")->send(new \App\Mail\Message($data));
            //Ne radi na localhostu
            return response(['data'=>"You have successfuly sent message"],200);
        }
        catch (\Exception $e){
            return response()->json(['data'=>"Server error"],500);
        }



    }



    public function editProfile(){


        return view("pages.editProfile",$this->data);
    }
    public function admin(){
        return view("pages.admin");
    }

    public function logFile(Request $request){
        $date=null;
        if($request->filled("date")){
            $date=strtotime($request->input("date"));
        }
        $content=null;
        if(Storage::disk("local")->exists("log.txt")){
            $content=Storage::get("log.txt");
            $content=explode("\r\n",$content);
            if($date){
                $newContent=[];
                foreach ($content as $item){
                    $items=explode("\t",$item);
                    if($date<strtotime($items[count($items)-1])){
                        $newContent[]=$item;
                    }
                }
                $content=$newContent;
            }
        }


        return response()->json(["log"=>$content],200);
    }



}
