<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_5ee36b1d45c11f3f59664d2bd02df9bd extends CI_Controller {

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
        $jsondata = read_file('./assets/datafiles/5ee36b1d45c11f3f59664d2bd02df9bd.json');

        $rawdata = json_decode($jsondata, true);

        $rawdata = $rawdata['observable_objects'][0]['extensions']['x-maec-avclass'];

        $newdata = [];
        foreach ($rawdata as $key => $value) {
           //  $classification_name = $value['classification_name'];
            $classification_name = ($value['classification_name']) ? 'Malware '.$value['classification_name'] : 'Malware';
            $av_name = $value['av_name'];
            $newdata[] =  [$classification_name, $av_name] ;
        }

        //$data['virdata'] = json_encode($virdata);
        $data['virdata'] = json_encode($newdata);
        $data['hashname'] = 'Malware Hash: 5ee36b1d45c11f3f59664d2bd02df9bd';
        $this->load->view('viruslogsview', $data);
}
}
