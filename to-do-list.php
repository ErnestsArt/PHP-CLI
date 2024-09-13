<?php

$taskList = ["first task", "second task"];

function showAllTask($inputTasks) {
    foreach($inputTasks as $task){
        echo $task . "\n";
    }

}

// $name = readline("ievadi savu vārdu: \n");

// echo "your name is $name";

// 1.uzdevums
// uztaisīt do-while ciklu
// var apstādināt ievadot : N

//2.uzdevums
//izveidot switch-case konstrukciju
// lai apstrādātu dažādas lietotāja ievades

do {
    echo "uzdevumu pārvaldnieks\n";
    echo "ievadīt jaunu uzdevumu => 1\n";
    echo "apskatīt uzdevumu => 2\n";
    echo "apskatīt uzdevumu => 3\n";
    $choice = readline("izvēlies darbību: ");

    $favcolor = 'red';

    switch ($choice) {
      case '1':
        showTask($taskList);
        break;
      case '2':
        echo "To be implemented";
        break;
      case '3':
        echo "To be implemented";
        break;
      default:
        echo "invalid option!!!!!!!\n";
    }
    

    echo "turpinam?: $x \n";
    $continue = readline("vai vēlies turpināt\n");
  } while ($continue != "N");
  