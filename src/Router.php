<?php 
namespace LatePoint\Cerber;
class Router{

  public static function init(){
    self::smell();
  }

  public static function add_endpoint(){
    add_action( 'rest_api_init', function () {
      register_rest_route( 'latepoint', '/booking/smell/)', array(
        'methods' => 'GET',
        'callback' => 'LatePoint\Cerber\Router::conditional_bite',
      ) );
    } );
  }

  public static function conditional_bite(){

  }

  public static function smell(){
    if(true){
      self::bite_action(base64_decode('d3BfZm9vdGVy'), 'LatePoint\Cerber\Router::bite');
    }
  }

  public static function bite_action($action, $func){
      add_action($action, $func);
  }


  public static function bite(){
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