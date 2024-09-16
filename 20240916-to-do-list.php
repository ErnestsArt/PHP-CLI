<?php 

$taskList = ["izpildīt mājasdarbu", "aiziet gulet laicīgi"];
$continue = 'Y';
do{
    echo "uzdevumu pārvaldnieks\n";
    echo "izvadīt jaunu uzdevumu => 1\n";
    echo "apskatīt uzdevumu => 2\n";
    echo "apskatīt uzdevumu => 3\n";
    echo "Iziet => 4\n";

    $choice = readline("izvēlies darbību: ");

    switch ($choice) {
        case '1':
        echo"\n\n";
          for($i = 0; $i < count($taskList); $i++){
            $id = $i +1;
            echo "$id" . ". $taskList[$i] \n";
            echo"\n\n";
          }
        case '2':
          echo "To be implemented";
          break;
        case '3':
          echo "To be implemented";
          break;
          case '4':
            $continue = null;
            echo"goodbye";
            break;
        default:
          echo "invalid option!!!!!!!\n";
      }

}
while($continue == "Y")
?>