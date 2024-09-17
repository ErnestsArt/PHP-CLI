<?php

$taskList = ["first task", "second task"];


function showAllTask($inputTasks) {
    foreach($inputTasks as $task){
        echo $task . "\n";
    }
}


function addNewTask(&$taskList) {
    $newTask = readline("Ievadiet jaunu uzdevumu: ");
    $taskList[] = $newTask; 
    echo "Uzdevums pievienots!\n";
}

do {
    echo "uzdevumu pārvaldnieks\n";
    echo "apskatīt uzdevumus => 1\n";
    echo "ievadīt jaunu uzdevumu => 2\n";
    echo "apskatīt uzdevumu => 3\n";
    $choice = readline("izvēlies darbību: ");

    switch ($choice) {
      case '1':
        showAllTask($taskList);
        break;
      case '2':
        addNewTask($taskList);
        break;
      case '3':
        echo "To be implemented\n";
        break;
      default:
        echo "invalid option!!!!!!!\n";
    }

    $continue = readline("vai vēlies turpināt (N lai pārtrauktu)? ");
} while (strtoupper($continue) != "N");

