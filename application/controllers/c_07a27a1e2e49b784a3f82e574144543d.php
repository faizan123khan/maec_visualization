<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_07a27a1e2e49b784a3f82e574144543d extends CI_Controller {

	public function index()
	{       
                $this->load->helper('new');
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
                $jsondata = read_file('./assets/datafiles/07a27a1e2e49b784a3f82e574144543d.json');

                $rawdata = json_decode($jsondata, true);
          
                $rawdata = $rawdata['additional_info']['behaviour-v1'];

                $process = [];
                $registry = [];
                $network = [];

                $newdata = [];
                $newdata[] =  ['Malware', 'Process'] ;
                $newdata[] =  ['Malware', 'Registry'] ;
                $newdata[] =  ['Malware', 'Network'] ;
       
                foreach ($rawdata['network'] as $key => $value) {
                        $classification_name = 'Network';
                        $av_name = $key;
                        $newdata[] =  [$classification_name, $av_name] ; 

                        if(is_array($value) && !empty($value)){

                                for($i=0; $i<count($value);$i++){

                                        if($key == 'http'){
                                                foreach ($value[$i] as $keyt => $valuet) {
                                                        $newdata[] =  [$key, $keyt] ;   
                                                        if(!is_array( $valuet) && !empty($valuet)){
                                                                $newdata[] =  [$keyt, $valuet];
                                                        }   
                                                }
                                        }

                                        if($key == 'url'){
                                                foreach ($value[$i] as $keyt => $valuet) {
                                                        $newdata[] =  [$key, $keyt] ;   
                                                        if(!is_array( $valuet) && !empty($valuet)){
                                                                $newdata[] =  [$keyt, $valuet];
                                                        }   
                                                }
                                        }
                                        
                                        if($key == 'dns'){                                        
                                                foreach ($value[$i] as $keyt => $valuet) {
                                                        $newdata[] =  [$key, $keyt] ;   
                                                        if(!is_array( $valuet) && !empty($valuet)){
                                
                                                                $newdata[] =  [$keyt, $valuet];
                                
                                                        }   
                                                }
                                        }

                                        if($key == 'tcp'){
                                                for($n = 0; $n<count($value); $n++){
                                                        // echo '<br>';
                                                        // print_r($value[$n]);
                                                        $newdata[] =  [$key, $value[$n]];
                                                }
                                        }
                                }
                        }
                }

                foreach ($rawdata['process'] as $key => $value) {

                        
                        $classification_name = 'Process';
                        $av_name = $key;
                        $newdata[] =  [$classification_name, $av_name] ; 
                        

                        if(is_array($value)){

                                for($i=0; $i<count($value);$i++)
                                foreach ($value[$i] as $keyt => $valuet) {
                        
                                        $newdata[] =  [$key, $keyt] ;   
                                        
                                        if(!is_array( $valuet) && !empty($valuet)){
                
                                                $newdata[] =  [$keyt, $valuet];
                
                                        }   
                                        
                                }
                        }
                         
                }

                foreach ($rawdata['registry'] as $key => $value) {

                        $classification_name = 'Registry';
                        $av_name = $key;
                        $newdata[] =  [$classification_name, $av_name] ; 
                         
                }
 
                $data['virdata'] = json_encode($newdata);
                $data['hashname'] = 'Malware Hash: 07a27a1e2e49b784a3f82e574144543d';
                $this->load->view('viruslogsview', $data);

        }
}