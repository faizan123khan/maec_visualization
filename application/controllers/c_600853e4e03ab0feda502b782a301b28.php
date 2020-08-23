<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_600853e4e03ab0feda502b782a301b28 extends CI_Controller {

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
                $jsondata = read_file('./assets/datafiles/600853e4e03ab0feda502b782a301b28.json');

                $rawdata = json_decode($jsondata, true);
                
                $rawdata = $rawdata['observable_objects'][0]['extensions']['x-maec-avclass'];

                $process = [];
                $registry = [];
                $network = [];

                $newdata = [];
                // $newdata[] =  ['Malware', 'Process'] ;
                // $newdata[] =  ['Malware', 'Registry'] ;
                // $newdata[] =  ['Malware', 'Network'] ;
                foreach ($rawdata as $key => $value) {
                        
                        $cnt = 0;

                        foreach ($value['process'] as $keyp => $valuep) {


                                if(!in_array($keyp, $process)){

                                        $classification_name = 'Malware';
                                        $av_name = $keyp;
                                        $newdata[] =  [$classification_name, $av_name] ;
                                        
                                        $process[] = $keyp;

                                        if(!is_array($valuep)){
                                                $valuep = trim($valuep);
                                                if(ctype_alpha($valuep[0])){
                                                        $text = str_replace(array("\n", "\r"), '', $valuep);
                                                        $newdata[] =  [$keyp, $text];

                                                }else{
                                                        $newdata[] =  [$keyp, $keyp.': '.$valuep];
                                                }
                                           
                                        }else{

                                                if(isAssoc($valuep)){

                                                        foreach ($valuep as $keyAssoc => $valueAssoc) {
                                                                // echo '<pre>';
                                                                // print_r($valueAssoc);
                                                                // echo '<br>';
                                                                
                                                                $newdata[] =  [$keyp, $keyAssoc];

                                                                if(!is_array($valueAssoc)){
                                                                        if(ctype_alpha($valueAssoc[0])){
                                                                                $text = str_replace(array("\n", "\r"), '', $keyAssoc);
                                                                                $newdata[] =  [$keyp, $text];
                                                                        } 
                                                                } 
                                                        }

                                                }

                                        }
                                       

                                }
                                $cnt++;
                        }
                        
// exit;
                break;
                }

                $data['virdata'] = json_encode($newdata);
                $data['hashname'] = 'Malware Hash: 600853e4e03ab0feda502b782a301b28';
                $this->load->view('viruslogsview', $data);

        }
}
