<?php
    /**
     * 
     */
    class Property extends CI_Model
    {
        
        function __construct()
        {
                parent::__construct();
        }

        public function get(){
            return "4 Bedroom 2 Story House";
        }
        public function connection_test(){
            $this->load->database('default',TRUE);
        }
    }
    