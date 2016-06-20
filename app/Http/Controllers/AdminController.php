<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;
use App\Place;
use App\Http\Requests;

class AdminController extends Controller
{

    public function get_admin_main(){

      return view('admin.main');
    }

    public function get_edit_place(){
      return view('admin.edit_place');
    }

    public function post_edit_place(Request $req){
      //dd($req);
      $model = Place::find(1);
      $model->place_type = $req->place_type;
      $model->place_desc = $req->place_desc;
      $model->place_title = $req->place_title;
      $model->place_title_desc = $req->place_title_desc;
      $model->work_time = $req->work_time;

      if($model->save()){
          return redirect('/admin');
      }

    }

    public function post_edit_category(){}

    public function get_edit_contacts(){
      return view('admin.edit_contacts');
    }

    public function post_edit_contacts(Request $req){
      //dd($req);
      $model = Contacts::find(1);
      $model->coord_x_for_map = $req->gx;
      $model->coord_y_for_map = $req->gy;
      $model->place_desc = $req->desc;
      $model->vk_link = $req->link_vk;
      $model->fb_link = $req->link_fb;
      $model->tw_link = $req->link_inst;
      $model->inst_link = $req->link_tw;
      $model->telephone1_number = $req->tel1;
      $model->telephone2_number = $req->tel2;
      if($model->save()){
          return redirect('/admin');
      }


    }

    public function get_edit_food_card(){
      return view('admin.edit_food');
    }

    public function post_edit_food_card(){}

    public function get_gallery(){
      return view('admin.gallery');
    }

    public function post_gallery(){}
}
