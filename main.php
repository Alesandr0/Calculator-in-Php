<?php
echo "Welcome to the calculator program!\n";
echo "What's your name?\n";
$name = readline ();
echo " 1- shut down    2- Sum\n 3- Subtraction  4- Division\n";
$option = readline ();
if ($option!=1){
    do {
        if ($option==2){
            $numberOne = readline('Enter a number: ');
            $numberTwo = readline('Enter a number: ');
            $result = $numberOne + $numberTwo;
            do{
                echo "would like to continue the sum?\n 1- Not  (any number)- Yes\n";
                $option = readline ();
                if ($option==1){
                    echo "\n Sum of the numbers is: ".$result;
                }
                else {
                    $numberOne = readline('Enter a number: ');
                    $result+= $numberOne;
                }
            }while($option!=1);
        }
        elseif ($option==3){  // Make Subtraction
            $numberOne = readline('Enter a number: ');
            $numberTwo = readline('Enter a number: ');
            $result = $numberOne - $numberTwo;
            do{
                echo "would like to continue the Subtraction?\n 1- Not  (any number)- Yes\n";
                $option = readline();
                if ($option==1){
                    echo "Subtraction of the numbers is: ".$result;
                }
                else {
                    $numberOne = readline('Enter a number: ');
                    $result-= $numberOne;
                }
            }while($option!=1);
        }
        elseif ($option==4){
         $numberOne = readline('Enter a number: ');
         echo "It will divide by how much?\n";
         $numberTwo = readline('Enter a number: ');
         $result = $numberOne/$numberTwo;
         echo "\n Division of the numbers is: ",$result;
        }
        echo "\n 1- shut down\n 2- Sum\n 3- Subtraction \n 4- Division\n";
        $option = readline();
    }while ($option!=1);
}
?>
