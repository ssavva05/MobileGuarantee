<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class receipt_model extends CI_Model
{
     function __construct()
     {
          // Call the Model constructor
          parent::__construct();
     }

     //get the username & password from tbl_usrs
     function  get_user_rec()
     {
         $this->load->library('session');
        $connect = mysqli_connect("localhost", "root", "", "micropro");
        $output = array();
        $data=$this->session->userdata('username');
        $query = "SELECT * FROM receipt WHERE username='$data'";
        $result = mysqli_query($connect, $query);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $output[] = $row;
            }
            
            return $output;
        }
        mysqli_connect.closedir();
    }
          
     }
