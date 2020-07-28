<?php
class Reports {
	var $log_file = "report.log";

	public function log( $log ) {
        if( $log != '' ):
            $fh = fopen( "reports/" . $this->log_file, "a");
            fwrite($fh,date('Y-m-d H:i:s')." ".$log." ** \n");
            fclose($fh);
        endif;
	}

}