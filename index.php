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
			for($j=0;$j<=($range);$j++)
			{
				
				for($i=0;$i<$range-$j;$i++)
				{
					echo " ";
				}
				echo "+";
				
				if($j!=0)
				{
					for($i=0;$i<(($j*2) - 1);$i++)
					{
						echo ".";
					}
					echo "+";
				}
				echo "\r\n";
			}
		
		
			for($j=1;$j<=($range);$j++)
			{
				
				for($i=0;$i<$j;$i++)
				{
					echo " ";
				}
				echo "+";
				
				if($j!=$range)
				{
					for($i=0;$i<((2*$range)-$j*2)-1;$i++)
					{
						echo ".";
					}
					echo "+";
				
				}
				echo "\r\n";
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