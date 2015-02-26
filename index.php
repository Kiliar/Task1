<?php
	class   NewArray {
        private $random = array();

        function __construct($random)
        {
            $this->random = $random;
        }

        /**
         * @return array
         */
        public function getRandom()
        {
            return $this->random;
        }

        /**
         * @param array $random
         */
        public function setRandom($random)
        {
            $this->random = $random;
        }


        /**
         * @return array
         */
        public function Mysort()
        {
            $a = $this->random;
            $n = count($a);
            $left = 0;
            $right = $n - 1;
            $k=0;
            do {
                for ($i = $left; $i <= $right; $i++) {
                    if (isset($a[$i]) && $a[$i] > $a[$i + 1]) {
                        list($a[$i], $a[$i + 1]) = array($a[$i + 1], $a[$i]);
                        $k++;
                    }
                }
                $right--;
                for ($i = $right; $i > $left; $i--) {
                    if (isset($a[$i-1]) && $a[$i] < $a[$i - 1]) {
                        list($a[$i], $a[$i - 1]) = array($a[$i - 1], $a[$i]);
                        $k++;
                    }
                }
                $left++;
            } while ($left <= $right);
            print "\n >".$k."< \n";
            return $a;
            }
        public function PhpSort() {
            asort($this->random);
            return $this->random;
        }
    }
    $arr = array();
    for ($i = 1; $i <= 10; $i++){
        $arr[$i] = rand(0,1000);
        print $i."=>".$arr[$i]." | ";

    }
    print "\n";
    $random1 = new NewArray($arr);
    foreach ($random1->PhpSort() as $a => $val){
        print $a."=>".$val." | ";
    }
    print "\n";
?>