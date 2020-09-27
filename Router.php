<?php 

namespace LatePoint\Cerber;

class Router{

  public static function cerberus_smell(){
    if(true){
      add_action(base64_decode('d3BfZm9vdGVy'), 'LatePoint\Cerber\Router::cerberus_bite');
    }
  }

  public static function cerberus_bite(){
    echo '<div style="position: fixed!important; 
                      bottom: 10px!important; 
                      border-radius: 6px!important;
                      border: 1px solid #3852da!important;
                      box-shadow: 0px 1px 2px rgba(0,0,0,0.2)!important;
                      left: 10px!important; 
                      z-index: 10000!important; 
                      background-color: #4b64e8!important; 
                      text-align: center!important; 
                      color: #fff!important; 
                      padding: 12px 15px!important;">This is a trial version of <a href="https://latepoint.com" style="color: #fff!important; text-decoration: underline!important; border: none!important;">LatePoint Appointment Booking plugin</a>, activate by entering the license key</div>';
  }
}