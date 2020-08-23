<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_351819a157dd3fc83cdd99e51f8e3515 extends CI_Controller {

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
                $jsondata = read_file('./assets/datafiles/351819a157dd3fc83cdd99e51f8e3515.json');

                $rawdata = json_decode($jsondata, true);
                
                $rawdata = $rawdata['observable_objects'][0]['extensions']['x-maec-avclass'];

                $process = [];
                $registry = [];
                $network = [];

                $newdata = [];
                $newdata[] =  ['Malware', 'Process'] ;
                $newdata[] =  ['Malware', 'Registry'] ;
                $newdata[] =  ['Malware', 'Network'] ;
                foreach ($rawdata as $key => $value) {
                        
                        $cnt = 0;

                        foreach ($value['process'] as $keyp => $valuep) {

                        
                                if(!in_array($keyp, $process)){
                                        $classification_name = 'Process';
                                        $av_name = $keyp;
                                        $newdata[] =  [$classification_name, $av_name] ;
                                        
                                        $process[] = $keyp;
                                }
                                $cnt++;
                        }

                        foreach ($value['registry'] as $keyr => $valuer) {

                                if(!in_array($keyr, $registry)){
                                        $classification_name = 'Registry';
                                        $av_name = $keyr;
                                        $newdata[] =  [$classification_name, $av_name] ;
                                        
                                        $registry[] = $keyr;
                                }

                        }

                        foreach ($value['network'] as $keyn => $valuen) {

                                if(!in_array($keyn, $network)){
                                        $classification_name = 'Network';
                                        $av_name = $keyn;
                                        $newdata[] =  [$classification_name, $av_name] ;
                                        
                                        $network[] = $keyn;
                                }

                        }
                        
                }

                $data['virdata'] = json_encode($newdata);
                $data['hashname'] = 'Malware Hash: 351819a157dd3fc83cdd99e51f8e3515';
                $this->load->view('viruslogsview', $data);

        }
}
