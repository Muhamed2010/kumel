<?php
class MY_Input extends CI_Input {
    function __construct()
    {
        parent::__construct();
    }
	function get($index = NULL, $xss_clean = FALSE)
	{
		// Check if a field has been provided
		if ($index === NULL AND ! empty($$_GET))
		{
			$get = array();

			// Loop through the full _POST array and return it
			foreach (array_keys($_GET) as $key)
			{
				$get[$key] = $this->_fetch_from_array($_GET, $key, $xss_clean);
			}
			return $get;
		}

		return $this->_fetch_from_array($_GET, $index, $xss_clean);
	}
}