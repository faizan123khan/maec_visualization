<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class teslacrypt extends CI_Controller {

	public function index()
	{
        
        //Files reading and getting data
        
        //Some useful functions
        /*
        EXT: The PHP file extension
        FCPATH: Path to the front controller (this file) (root of CI)
        SELF: The name of THIS file (index.php)
        BASEPATH: Path to the system folder
        APPPATH: The path to the "application" folder
        */
        
        // exit(FCPATH .'assets/datafiles/myOutputFile.json');
        $jsondata = read_file('./assets/datafiles/Teslacrypt.json');

        $rawdata = json_decode($jsondata, true);

        $rawdata = $rawdata['additional_info']['behaviour-v1']['network']['http'][0];

        $newdata = [];
        
       foreach ($rawdata as $key => $value) {
          //  $classification_name = $value['url'];
         //   $classification_name = ($value['method']) ? 'Malware '.$value['method'] : 'Malware';
         //   $av_name = $value['user-agent'];
         //   $newdata[] =  [$classification_name, $av_name] ;
       }

        //$data['virdata'] = json_encode($virdata);
        $data['virdata'] = json_encode($newdata);
        $data['hashname'] = 'Malware Hash: Teslacrypt';
        $this->load->view('viruslogsview', $data);
}
}
