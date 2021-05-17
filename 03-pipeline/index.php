<?php


class Pipeline
{
	public static function make_pipeline()
	{
		$func_list = func_get_args();
		
		$result = function($arg) use ($func_list)
		{
			foreach($func_list as $funcs)
			{
				if(!isset($value))
				{
					echo "set value!\n";
					$value  =   $funcs($arg);
				}
				else
				{
					echo "update value!\n";
					$value  =   $funcs($value);
				}
				
				echo "Argument $value is: " . $value . "\n";
			}
			return $value;
		};
		
		return $result;
	}
}

$fun = Pipeline::make_pipeline(function($x) { return $x * 3; }, function($x) { return $x + 1; },
						  function($x) { return $x / 2; });
echo $fun(3); # should print 5

