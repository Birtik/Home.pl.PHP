<?php
	
	class Circle
	{
		private $r;
		
		public function __construct($r)
		{
			$this->r = $r;
		}
		
		public function createCircle()
		{
			$range = $this->r;
			$plus = $range - 1;
			$fall = 0;
			
			if($plus%2==0) $plus++;
			if($range%2==1) $fall = $range - 1;
			else $fall = $range;
				
			
			for($i=0;$i<$range;$i++)
			{
				echo " ";
			}
			for($i=0;$i<$plus;$i++)
			{
				echo "+";
			}
			echo "\r\n";
			
			$begin = 0;
			$end = 0;
			
			for($i=0;$i<($fall - ($fall/2));$i++)
			{
				for($j=0;$j<$range-$i-1;$j++)
				{
					echo " ";
				}
				echo "+";
				
				for($j=0;$j<(($i*2)+$plus);$j++)
				{
					echo " ";
				}
				echo "+";
				
				echo "\r\n";
				
				$begin = $range-$i-1;
				$end = (($i*2)+$plus);
			}
			
			
			for($j=0;$j<$plus;$j++)
			{
				for($i=0;$i<$begin-1;$i++)
				{
					echo " ";
				}
				echo "+";
				
				for($i=0;$i<$end+2;$i++)
				{
					echo " ";
				}
				echo "+";
				echo "\r\n";
			}
			
			$begin2 = 0;
			
			for($j=0;$j<($fall - ($fall/2));$j++)
			{
				for($i=0;$i<$begin+$j;$i++)
				{
					echo " ";
				}
				echo "+";
				
				for($i=0;$i<$end-$j*2;$i++)
				{
					echo " ";
				}
				echo "+";
				
				
				echo "\r\n";
				$begin2 = $begin+$j;
			}	
			
			for($i=0;$i<$begin2+1;$i++)
			{
				echo " ";
			}
			for($i=0;$i<$plus;$i++)
			{
				echo "+";
			}
		}
			
		public function __destruct(){}
	}

/////////////////////////////////////////////////////////

	if(count($argv)==2)
	{
		$circle = new Circle($argv[1]);
		$circle->createCircle();
		
	}
	else if(count($argv)==1)
	{
		echo "Nie podano argumentu!";
	}
	else
	{
		echo "Zła ilość argumentów!";
	}
?>
