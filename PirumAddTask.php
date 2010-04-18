<?php

include_once 'phing/Task.php';

class PirumAddTask extends Task
{

    //
    // The class's properties
    //

	protected $dir = "";
	
	protected $packagefile = "";
   
	//
	// Setter methods for each XML attribute
	//

	/**
	 * Sets the path to the pirum pear repository
	 */
	function setDir($toDir)
	{
		$this->dir = $toDir;
	}

	/**
	 * Returns the path of the pirum pear repository
	 */
	function getDir()
	{
		return $this->dir;
	}

	/**
	 * Sets the packagefile
	 */
	function setPackagefile($packagefile)
	{
		$this->packagefile = $packagefile;
	}

	/**
	 * Returns the packagefile
	 */
	function getPackagefile()
	{
		return $this->packagefile;
	}
	
    //
    // The main() method
    //

	function main()
	{
		$this->log("Adding file '".$this->packagefile."' to pirum pear repository in '".$this->dir."'");
		$cmd = "cd ".$this->dir."; pirum add . ".$this->packagefile.";";
		$this->log("Run :" . $cmd);		
		passthru($cmd, $return);		
		$this->log("Return :" . $return);		
	}
	
}
?>
